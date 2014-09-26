<?php
/* ------------------------------------------------------------------------ */
/* Theme Recent Posts Content - Video Post Format
/* ------------------------------------------------------------------------ */
?>

<div class="span3">
		
	<div class="latest-blog-thumb">
		<div class="entry-video"> <?php echo do_shortcode( get_post_meta($post->ID, '_format_video_embed', true) ); ?> <?php echo sd_post_like_link(get_the_ID()); ?></div>
	</div>

	<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
		<ul>
		<li><span class="sd-meta-color"><?php _e('On: ', 'sd-framework'); ?></span><?php echo get_the_time(get_option('date_format')); ?></li>
		<li><span class="sd-meta-color"><?php _e('By: ', 'sd-framework'); ?></span><?php the_author(); ?></li>
		</ul>
	<p><?php echo substr(get_the_excerpt(), 0, 70) . ' ...'; ?></p>
		
</div>