<?php
/* ------------------------------------------------------------------------ */
/* Theme Index Content - Gallery Post Format
/* ------------------------------------------------------------------------ */

global $sd_page_template;
if ( $sd_page_template == true ) { $post_thumb = 'latest-blog'; } else { $post_thumb = 'blog-thumbs'; };

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry gallery-entry clearfix'); ?>>
	<!-- entry wrapper -->
	<div class="entry-wrapper">
	<?php if ( $sd_page_template == true ) {
				echo '<div class="row">';
			}
	?>
		<!-- post thumbnail -->
		<?php if ( $sd_page_template == true ) {
				echo '<div class="span3">';
			}
		?>
		<div class="entry-gallery">
			<div class="flexslider">
				<ul class="slides">
					<?php if ($images = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image' )) ) : ?>
					<?php foreach( $images as $image ) :  ?>
					<li><a href="<?php the_permalink(); ?>" title="<?php printf( 'Permalink la %s', the_title_attribute('echo=0') ); ?>" rel="bookmark">
						<figure><?php echo wp_get_attachment_image($image->ID, $post_thumb ); ?></figure>
						</a></li>
					<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
			<?php echo sd_post_like_link(get_the_ID()); ?>
		</div>
		<?php if ( $sd_page_template == true ) {
				echo '</div>';
			}
		?>
		<!-- post thumbnail end--> 
		<?php if ( $sd_page_template == true ) {
				echo '<div class="span5">';
			}
		?>
		<header>
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink la %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
				<?php the_title(); ?>
				</a> </h3>
		</header>
		<?php get_template_part( 'framework/inc/post-meta'); ?>
		<!-- entry content  -->
		<div class="entry-content">
			<?php the_content(__( 'Read More', 'sd-framework' )); ?>
		</div>
		<?php if ( $sd_page_template == true ) {
				echo '</div>';
			}
		?>
		<!-- entry content end --> 
		<?php if ( $sd_page_template == true  ) {
				echo '</div>';
			}
		?>
		</div>
	<!-- entry wrapper end--> 
</article>
<!--post-end--> 