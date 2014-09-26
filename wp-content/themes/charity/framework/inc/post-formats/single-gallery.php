<?php
/* ------------------------------------------------------------------------ */
/* Theme Single Post - Gallery Post Format
/* ------------------------------------------------------------------------ */
global $sd_data;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry single-blog-entry clearfix'); ?>>
	<!-- entry wrapper -->
	<div class="entry-wrapper"> 
		<!-- post thumbnail -->
		<div class="entry-gallery">
			<div class="flexslider">
				<ul class="slides">
					<?php if ($images = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image' )) ) : ?>
					<?php foreach( $images as $image ) :  ?>
					<li>
						<figure><?php echo wp_get_attachment_link($image->ID, 'blog-thumbs'); ?></figure>
					</li>
					<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
			<?php echo sd_post_like_link(get_the_ID()); ?>
		</div>
		<!-- post thumbnail end--> 
    <header>
      <?php get_template_part( 'framework/inc/post-meta'); ?>
    </header>
    <!-- entry content  -->
    <div class="entry-content">
      <?php the_content(); ?>
      <?php wp_link_pages('before=<strong class="page-navigation clearfix">&after=</strong>'); ?>
    </div>
    <!-- entry content end -->
	<?php if ( $sd_data['sharing_icons'] == 1 ) : ?>
	<?php get_template_part( 'framework/inc/share-icons' ); ?>
	<?php endif; ?>
	
	<?php if ( $sd_data['author_box'] == 1 ) : ?>
	<?php get_template_part( 'framework/inc/author-box' ); ?>
	<?php endif; ?>
    <footer>
      <div class="prev-next clearfix"> <span class="previous-article">
        <?php next_post_link('%link',__('&larr; Previous Post','sd-framework')); ?>
        </span> <span class="next-article">
        <?php previous_post_link('%link',__('Next Post &rarr;','sd-framework')); ?>
        </span> </div>
    </footer>
  </div>
  <!-- entry wrapper end--> 
</article>
<!--post-end-->