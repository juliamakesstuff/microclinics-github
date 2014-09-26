<?php
/* ------------------------------------------------------------------------ */
/* Theme Recent Posts Content - Gallery Post Format
/* ------------------------------------------------------------------------ */
?>

<div class="span3">
		
	<div class="latest-blog-thumb">
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
			<?php echo sd_post_like_link(get_the_ID()); ?>
		</div>
	</div>

	<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
		<ul>
		<li><span class="sd-meta-color"><?php _e('On: ', 'sd-framework'); ?></span><?php echo get_the_time(get_option('date_format')); ?></li>
		<li><span class="sd-meta-color"><?php _e('By: ', 'sd-framework'); ?></span><?php the_author(); ?></li>
		</ul>
	<p><?php echo substr(get_the_excerpt(), 0, 70) . ' ...'; ?></p>
		
</div>