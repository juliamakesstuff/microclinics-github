<?php
/* ------------------------------------------------------------------------ */
/* Post Meta
/* ------------------------------------------------------------------------ */
?>
<!-- entry meta -->

<aside class="entry-meta clearfix">
	<ul>
		
		<li class="meta-date">
			<?php _e('On: ', 'sd-framework'); ?>
			<span class="meta-gray">
			<?php the_time(get_option('date_format')); ?>
			</span> </li>
		<li class="meta-author">
			<?php _e('By: ', 'sd-framework'); ?>
			<span class="meta-gray">
			<?php the_author(); ?>
			</span> </li>
		<li class="meta-category">
			<?php _e('In: ', 'sd-framework'); ?>
			<?php the_category(', '); ?>
			<?php the_terms( $post->ID, 'events_filter', '', ', ', '' ); ?>
		</li>
		<?php
			$post_tags = the_tags('<li class="meta-tag">'. __('Tagged: ', 'sd-framework') .'', ' , ', '</li>');
			
			if ($post_tags) {
				$post_tags;
			}
			?>
	</ul>
</aside>
<!-- entry meta end --> 