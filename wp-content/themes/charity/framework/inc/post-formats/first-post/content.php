<?php
/* ------------------------------------------------------------------------ */
/* Theme Index Content - Standard Post Format
/* ------------------------------------------------------------------------ */
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
		</header>
		<?php get_template_part( 'framework/inc/post-meta'); ?>
		<!-- entry content  -->
		<div class="entry-content">
			<?php the_content(__( 'Read More', 'sd-framework' )); ?>
		</div>
		<!-- entry content end --> 
		</div>
	<!-- entry wrapper end--> 
</article>
<!--post-end--> 