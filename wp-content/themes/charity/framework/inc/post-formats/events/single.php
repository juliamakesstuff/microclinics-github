<?php
/* ------------------------------------------------------------------------ */
/* Theme Single Post Events
/* ------------------------------------------------------------------------ */
global $sd_data;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry single-blog-entry clearfix'); ?>> 
	<!-- entry wrapper -->
	<div class="entry-wrapper"> 
		<!-- post thumbnail -->
		<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : ?>
		<div class="entry-thumb">
			<figure>
				<?php the_post_thumbnail('blog-thumbs'); ?>
			</figure>
			<?php echo sd_post_like_link(get_the_ID()); ?>
		</div>
		<?php endif; ?>
		<!-- post thumbnail end-->
		<header>
			<h3 class="entry-title"><?php the_title(); ?> </h3>
			<span class="sd-event-date-time"><i class="fa fa-calendar fa-lg"></i> <?php echo rwmb_meta('sd_dov'); ?> at <?php echo rwmb_meta('sd_tov'); ?></span>
			<span class="sd-event-location"><i class="fa fa-map-marker fa-lg"></i> <?php echo rwmb_meta('sd_event_address'); ?></span>
				
		</header>
		<!-- entry content  -->
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages('before=<strong class="page-navigation clearfix">&after=</strong>'); ?>
		</div>
		<!-- entry content end -->
		
		<?php if ( 'yes' == rwmb_meta( 'sd_show_map' ) ) : ?>
		<!-- event map -->
		<div class="sd-event-map clearfix">
		<h3 class="entry-title"><?php _e('Location Map', 'sd-framework'); ?></h3>
		<?php
			$args = array(
				'type'   => 'map',
				'width'  => '770px',
				'height' => '300px',
				'zoom'   => 14,
				'marker' => true,
			);
			
			echo rwmb_meta( 'sd_event_map', $args );
		?>
		</div>
		<?php endif; ?>
		<!-- share icons -->
		<?php if ( $sd_data['sharing_icons'] == 1 ) : ?>
		<?php get_template_part( 'framework/inc/share-icons' ); ?>
		<?php endif; ?>
		<footer>
			<div class="prev-next clearfix"> <span class="previous-article">
				<?php next_post_link('%link',__('&larr; Previous Event','sd-framework')); ?>
				</span> <span class="next-article">
				<?php previous_post_link('%link',__('Next Event &rarr;','sd-framework')); ?>
				</span> </div>
		</footer>
	</div>
	<!-- entry wrapper end--> 
</article>
<!--post-end-->