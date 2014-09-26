<?php
/* ------------------------------------------------------------------------ */
/* Theme Single Post - Standard Post Format
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
      <?php get_template_part( 'framework/inc/post-meta-events'); ?>
    </header>
    <!-- entry content  -->
    <div class="entry-content">
      <?php the_content(); ?>
      <?php wp_link_pages('before=<strong class="page-navigation clearfix">&after=</strong>'); ?>
    </div>
    <!-- entry content end -->
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