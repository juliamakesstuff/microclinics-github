<?php
/* ------------------------------------------------------------------------ */
/* Theme Index Content - Gallery Post Format
/* ------------------------------------------------------------------------ */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry gallery-entry clearfix'); ?>>
	<!-- entry wrapper -->
	<div class="entry-wrapper">
		<!-- post thumbnail -->
		<div class="entry-gallery">
			<div class="flexslider">
				<ul class="slides">
					<?php if ($images = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image' )) ) : ?>
					<?php foreach( $images as $image ) :  ?>
					<li><a href="<?php the_permalink(); ?>" title="<?php printf( 'Permalink la %s', the_title_attribute('echo=0') ); ?>" rel="bookmark">
						<figure><?php echo wp_get_attachment_image($image->ID, 'latest-blog'); ?></figure>
						</a></li>
					<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
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