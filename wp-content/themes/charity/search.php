<?php 
/* ------------------------------------------------------------------------ */
/* Theme Search Results
/* ------------------------------------------------------------------------ */
get_header(); ?>
<!--left col-->

<div class="container">
  <div class="row"> 
    <!--left col-->
    <div id="left-col" class="span8" <?php if ($sd_data['blog_sidebar'] == 'left') echo 'style="float: right;"';?>>
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php get_template_part( 'framework/inc/post-formats/content', get_post_format() ); ?>
      <?php endwhile; else: ?>
      <p>
        <?php _e('Sorry, no posts matched your criteria', 'sd-framework') ?>
        .</p>
      <?php endif; ?>
      <!--pagination-->
      <?php sd_custom_pagination();  ?>
      <!--pagination end--> 
    </div>
    <!--left col end--> 
    <!--sidebar-->
    <?php get_sidebar(); ?>
    <!--sidebar end--> 
  </div>
</div>
<?php get_footer(); ?>