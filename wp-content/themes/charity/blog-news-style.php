<?php 
/* ------------------------------------------------------------------------ */
/* Template name: Page: Blog News Style
/* ------------------------------------------------------------------------ */
get_header(); ?>

<div class="container content">
	<div class="row"> 
		<!--left col-->
		<div id="left-col" class="span8" <?php if ($sd_data['blog_sidebar'] == 'left') echo 'style="float: right;"';?>>
			<div class="row">
			<?php 
		global $wp_query;
		global $more;
		$col = 1;
		$i = 1;
		$more = 0;
		$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		$args = array(
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'paged' => $paged
			);
		
		$wp_query = new WP_Query($args);
		
		if ($wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
	?>
	
			<?php if( $i == 1 ): // If this is the first post and on the first page then display the large box style ?>
			
			<div class="sd-first-post span8">
			<?php get_template_part( 'framework/inc/post-formats/content', get_post_format() ); ?>
			</div>
			
			<?php elseif($i > 0): // If this is the second, third or fourth post and on the first page, then display in columns. ?>
		    <?php if ($col == 1) echo '<div style="clear: both;">'; ?>
			
			<div class="span4">
			<?php get_template_part( 'framework/inc/post-formats/content', get_post_format() ); ?>
			</div>
			
			<?php if ($col == 1) echo "</div>"; (($col==1) ? $col=2 : $col=1); ?>
		    <?php endif;?>
		    <?php $i++; ?>
			
			<?php endwhile; else: ?>
			<p>
				<?php _e('Sorry, no posts matched your criteria', 'sd-framework') ?>
				.</p>
			<?php endif; ?>
			<!--pagination-->
			<?php if ( $sd_data['theme_pagination'] == 1 ) : ?>
			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-previous">
				<?php previous_posts_link( __( 'Previous Posts', 'sd-framework' ) ); ?>
			</div>
			<?php endif; ?>
			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-next">
				<?php next_posts_link( __( 'Next Posts', 'sd-framework' ) ); ?>
			</div>
			<?php endif; ?>
			<?php elseif ( $sd_data['theme_pagination'] == 2 ) : ?>
			<?php sd_custom_pagination();  ?>
			<?php endif; ?>
			<!--pagination end--> 
			</div>
		</div>
		<!--left col end--> 
		<!--sidebar-->
		<?php get_sidebar(); ?>
		<!--sidebar end--> 
	</div>
</div>
<?php get_footer(); ?>
