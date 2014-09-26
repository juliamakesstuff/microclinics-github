<?php
/*
Plugin Name: Tabbed Popular & Recent Posts Widget
Plugin URI: http://www.skatdesign.com/
Description: A simple widget to display the popular posts, recent posts and recent comments in tabs.
Version: 1.00
Author: Skat
Author URI: http://www.skatdesign.com/
*/

// The widget class
class sd_tabbed_widget extends WP_Widget {
	
	// Widget Settings
	function sd_tabbed_widget() {
	
		$widget_ops = array( 'classname' => 'sd_tabbed_widget', 'description' => __('A widget to display tabs with popular and recent posts.', 'framework') );
		$control_ops = "";
		$this->WP_Widget( 'sd_tabbed_widget', __('Tabbed Popular &amp; Recent Posts', 'framework'), $widget_ops, $control_ops );
	}
	
	// Widget Output
	function widget($args, $instance) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);

		// Before the widget
		echo $before_widget;

		// Display the widget title if one was input
		if ( $title )
		echo $before_title . $title . $after_title;
		
		?>

<div class="sd-tabbed-widget">
	<div class="sd-tabs sd-tabs-visibility no-js">
		<div class="sd-tab-content">
			<ul class="clearfix sd-tab-titles">
				<li><a href="#sd-tab-popular"><?php _e('Popular', 'framework'); ?></a></li>
				<li><a href="#sd-tab-recent"><?php _e('Latest', 'framework'); ?></a></li>
				<li><a href="#sd-tab-comments"><?php _e('Recent Comments', 'framework'); ?></a></li>
			</ul>
			<div id="sd-tab-popular" class="sd-tab clearfix">
				<div class="popular-posts">
					<ul>
						<?php 
			$popular_posts = new WP_Query();
			$popular_posts->query('showposts='.$instance['postcount'].'&orderby=comment_count');
			while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
						<li class="clearfix">
							<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
							<div class="popular-post-thumb">
								<figure>
									<?php the_post_thumbnail('recent-blog'); ?>
								</figure>
							</div>
							<!--image-->
							<?php endif; ?>
							<div class="popular-posts-content">
								<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
									</a> </h4>
								<p><?php echo substr(get_the_excerpt(), 0, 55); ?></p>
								<span class="popular-date"> <?php echo get_the_date( get_option('date_format') ); ?> </span> <span class="popular-comments">,
								<?php comments_popup_link( '0 comments', '1 comment', '%  comments', 'comments-link', 'comments closed'); ?>
								</span> </div>
							<!--details--> 
						</li>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</ul>
				</div>
			</div>
			<div id="sd-tab-recent" class="sd-tab  clearfix">
				<div class="popular-posts">
					<ul>
						<?php 
			$recent_posts = new WP_Query();
			$recent_posts->query('showposts='.$instance['postcount'].'');
			while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
						<li class="clearfix">
							<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
							<div class="popular-post-thumb">
								<figure>
									<?php the_post_thumbnail('recent-blog'); ?>
								</figure>
							</div>
							<!--image-->
							<?php endif; ?>
							<div class="popular-posts-content">
								<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
									</a> </h4>
								<p><?php echo substr(get_the_excerpt(), 0, 55); ?></p>
								<span class="popular-date"> <?php echo get_the_date( get_option('date_format') ); ?> </span> <span class="popular-comments">,
								<?php comments_popup_link( '0 comments', '1 comment', '%  comments', 'comments-link', 'comments closed'); ?>
								</span> </div>
							<!--details--> 
						</li>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</ul>
				</div>
			</div>
			
			<div id="sd-tab-comments" class="sd-tab  clearfix">
			
			<div class="popular-posts">
			<?php
			// Display recent comments
			
			function custom_recent_comments($amount = 3, $avatar_size = 65) {
				
 				$comments_query = new WP_Comment_Query();
				$comments = $comments_query->query( array( 'number' => $amount ) );
				
				$comm = '';
				
				if ( $comments ) : foreach ( $comments as $comment ) :
				
					$comm .= '<li><div class="popular-post-thumb"><figure>' . get_avatar( $comment->comment_author_email, $avatar_size ) . '</figure></div>';
					$comm .= '<div class="popular-posts-content"><h4><a href="' . get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID . '">';
					$comm .= get_comment_author( $comment->comment_ID ) . '</a> '. __('on: ', 'framework') .' </h4> ';
					$comm .= '<a href="'. get_permalink($comment->comment_post_ID) .'">' . get_the_title($comment->comment_post_ID) . '</a></div></li>';

				endforeach; else :
					$comm .= 'No comments.';
				endif;

				echo $comm;
				
				wp_reset_query();
			}
			
			echo '<ul class="custom-recent-comments">';
			custom_recent_comments(3);
			echo '</ul>';
		?>
			</div>
			</div>
		</div>
	</div>
</div>
<?php 
		// After the widget
		echo $after_widget;
	}
	// Update the widget		
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['postcount'] = strip_tags( $new_instance['postcount'] );

		return $instance;
	}

	// Widget panel settings
	function form( $instance ) {

	// Default widgets settings
		$defaults = array(
		'title' => __('', 'framework'),
		'postcount' => '3'
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

<!-- Widget Title: Text Input -->
<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>">
		<?php _e('Title:', 'framework') ?>
	</label>
	<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
</p>

<!-- Post Count: Text Input -->
<p>
	<label for="<?php echo $this->get_field_id( 'postcount' ); ?>">
		<?php _e('Post Count', 'framework') ?>
	</label>
	<input class="widefat" type="text" id="<?php echo $this->get_field_id( 'postcount' ); ?>" name="<?php echo $this->get_field_name( 'postcount' ); ?>" value="<?php echo $instance['postcount']; ?>" />
</p>
<?php
	}
}
// Register and load the widget
function sd_tabbed_widget() {
	register_widget( 'sd_tabbed_widget' );
}
add_action( 'widgets_init', 'sd_tabbed_widget' );
?>
