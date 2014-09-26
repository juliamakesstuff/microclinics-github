<?php
/* ------------------------------------------------------------------------ */
/* Share Icons
/* ------------------------------------------------------------------------ */
?>
<!-- author box -->
<div class="sd-author-box clearfix">
	<h3 class="clearfix">
		<?php _e('AUTHOR', 'sd-framework'); ?>
	</h3>
	<div class="sd-author-photo">
		<?php if (function_exists('get_avatar')) { echo get_avatar(get_the_author_meta('email'), '84' ); }?>
	</div>
	<div class="sd-author-bio">
		<h4>
			<?php the_author_meta('display_name'); ?>
		</h4>
		<p>
			<?php the_author_meta('description') ?>
		</p>
		<ul>
			<?php if ( get_the_author_meta('user_url') != '' ) { ?>
			<li class="author-website"><a class="sd-bg-trans" href="<?php the_author_meta('user_url'); ?>" rel="nofollow" target="_blank">Website</a></li>
			<?php } ?>
			<?php if ( get_the_author_meta('facebook') != '' ) { ?>
			<li class="author-facebook"><a class="sd-bg-trans" href="<?php the_author_meta('facebook'); ?>" rel="nofollow" target="_blank">Facebook</a></li>
			<?php } ?>
			<?php if ( get_the_author_meta('twitter') != '' ) { ?>
			<li class="author-twitter"><a class="sd-bg-trans" href="<?php the_author_meta('twitter'); ?>" rel="nofollow" target="_blank">Twitter</a></li>
			<?php } ?>
			<?php if ( get_the_author_meta('googleplus') != '' ) { ?>
			<li class="author-googleplus"><a class="sd-bg-trans" href="<?php the_author_meta('googleplus'); ?>" rel="nofollow" target="_blank">Google+</a></li>
			<?php } ?>
			<?php if ( get_the_author_meta('linkedin') != '' ) { ?>
			<li class="author-linkedin"><a class="sd-bg-trans" href="<?php the_author_meta('linkedin'); ?>" rel="nofollow" target="_blank">LinkedIn</a></li>
			<?php } ?>
			<?php $author_id = get_the_author_meta('ID'); ?>
			<li class="author-rss"><a class="sd-bg-trans" href="<?php echo get_author_feed_link($author_id); ?>" rel="nofollow">Author RSS</a> </li>
		</ul>
	</div>
</div>
