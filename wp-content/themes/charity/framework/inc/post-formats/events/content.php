<?php
/* ------------------------------------------------------------------------ */
/* Events Content
/* ------------------------------------------------------------------------ */
global $sd_page_template;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry standard-entry clearfix'); ?>> 
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
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink la %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
				<?php the_title(); ?>
				</a> </h3>
			<span class="sd-event-date-time"><i class="fa fa-calendar fa-lg"></i> <?php echo rwmb_meta('sd_dov'); ?> at <?php echo rwmb_meta('sd_tov'); ?></span>
			<span class="sd-event-location"><i class="fa fa-map-marker fa-lg"></i> <?php echo rwmb_meta('sd_event_address'); ?></span>
				
		</header>
		<!-- entry content  -->
		<div class="entry-content">
		
		</div>
		<!-- entry content end --> 
		</div>
	<!-- entry wrapper end--> 
</article>
<!--post-end--> 