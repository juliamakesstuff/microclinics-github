<?php
/* ------------------------------------------------------------------------ */
/* Theme Index Content - Standard Post Format
/* ------------------------------------------------------------------------ */
global $sd_page_template;
if ( $sd_page_template == true ) { $post_thumb = 'latest-blog'; } else { $post_thumb = 'blog-thumbs'; };
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry standard-entry clearfix'); ?>> 
	<!-- entry wrapper -->
	<div class="entry-wrapper">
	<?php if ( $sd_page_template == true ) {
				echo '<div class="row">';
			}
	?>
		<!-- post thumbnail -->
		<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : ?>
		
		<?php if ( $sd_page_template == true ) {
				echo '<div class="span3">';
			}
		?>
		
		<div class="entry-thumb">
			<figure>
				<?php the_post_thumbnail($post_thumb); ?>
			</figure>
			<?php echo sd_post_like_link(get_the_ID()); ?>
		</div>
		<?php if ( $sd_page_template == true  ) {
				echo '</div>';
			}
		?>
		<?php endif; ?>
		<!-- post thumbnail end-->
		<?php if ( $sd_page_template == true ) {
				if ( has_post_thumbnail() ) {
					echo '<div class="span5">';
				} else {
					echo '<div>';
				}
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
		<?php if ( $sd_page_template == true  ) {
				echo '</div>';
			}
		?>
		<!-- entry content end --> 
				<?php if ( $sd_page_template == true ) {
				echo '</div>';
			}
		?>
		</div>
	<!-- entry wrapper end--> 
</article>
<!--post-end--> 