<?php
/* ------------------------------------------------------------------------ */
/* Theme Index Content - Audio Post Format
/* ------------------------------------------------------------------------ */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry audio-entry clearfix'); ?>>
	<!-- entry wrapper -->
	<div class="entry-wrapper">
		<!-- post thumbnail -->
		<div class="entry-audio">
			<?php $audio_url = get_post_meta($post->ID, '_format_audio_embed', true); ?>
			<?php echo do_shortcode('[audio src="'. $audio_url .'"]'); ?>
		</div>
        <div class="shadow-wrap">
		<!-- post thumbnail end--> 
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
		<!-- entry content end --> 
        </div>
	</div>
	<!-- entry wrapper end-->
</article>
<!--post-end--> 