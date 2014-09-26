<?php
/* ------------------------------------------------------------------------ */
/* Theme Recent Posts Content - Audio Post Format
/* ------------------------------------------------------------------------ */
?>

<div class="span3">
		
	<div class="latest-blog-thumb">
		<div class="entry-audio">
		<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : ?>
		<figure><?php the_post_thumbnail('latest-blog'); ?><?php echo sd_post_like_link(get_the_ID()); ?></figure>
		<?php endif; ?>
			<?php $audio_url = get_post_meta($post->ID, '_format_audio_embed', true); ?>
			<?php echo do_shortcode('[audio src="'. $audio_url .'"]'); ?>
		</div>
	</div>

	<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><?php echo sd_post_like_link(get_the_ID()); ?></h4>
		<ul>
		<li><span class="sd-meta-color"><?php _e('On: ', 'sd-framework'); ?></span><?php echo get_the_time(get_option('date_format')); ?></li>
		<li><span class="sd-meta-color"><?php _e('By: ', 'sd-framework'); ?></span><?php the_author(); ?></li>
		</ul>
	<p><?php echo substr(get_the_excerpt(), 0, 70) . ' ...'; ?></p>
		
</div>