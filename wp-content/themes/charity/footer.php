<?php
/* ------------------------------------------------------------------------ */
/* Theme Footer
/* ------------------------------------------------------------------------ */
global $sd_data 
?>
<!-- footer -->

<footer id="footer"> 
	<!-- footer content -->
	<div class="container">
	<?php if ( $sd_data['newsletter_form'] == 1 ) : ?>
		<div class="sd-newsletter">
			<div class="row">
				<div class="span4 sd-email-icon">
					<span class="pull-left sd-margin-right">
					</span>
					<h4 class="sd-styled-title"><?php echo $sd_data['newsletter_title']; ?></h4>
					<?php if ( !empty($sd_data['newsletter_desc']) ) : ?>
					<p><?php echo $sd_data['newsletter_desc']; ?></p>
					<?php endif; ?>
				</div>
				<div class="span8 sd-newsletter-code"> <?php echo $sd_data['newsletter_code']; ?> </div>
			</div>
		</div>
	<?php endif; ?>
	
	<?php if ( $sd_data['widgetized_footer'] == 1 ) : ?>
		
		<!-- footer widgets -->
		<div class="footer-widgets">
			<div class="row">
				<div class="span4">
					<?php dynamic_sidebar( 'footer-left-sidebar' ); ?>
				</div>
				<div class="span4">
					<?php dynamic_sidebar( 'footer-middle-sidebar' ); ?>
				</div>
				<div class="span4">
					<?php dynamic_sidebar( 'footer-right-sidebar' ); ?>
				</div>
			</div>
		</div>
		<!-- footer widgets end --> 
	</div>
	<!-- footer content end --> 
	<?php endif; ?>
</footer>
<!-- footer end -->

<!-- copyright -->
<div class="copyright clearfix">
	<div class="container">
		<div class="row">
			<div class="copyright-content span12">
				<div class="row">
					<div class="span4">
						<?php /* Replace default text if option is set */
	if( $sd_data['copyright'] != '') : ?>
						<p><?php echo stripslashes($sd_data['copyright']); ?></p>
						<?php else : ?>
						<p>Copyright &copy; <?php echo date('Y'); ?> - <a href="http://skat.tf" title="Premium WordPress Themes" rel="home"> Skat Design </a> </p>
						<?php endif; ?>
					</div>
					<div class="span8">
						<?php if ( $sd_data['social_icons_footer'] == 1) : ?>
						<!-- social bottom -->
						<div class="social-bottom"> 
							
							<!-- subscribe -->
							<ul class="social-icons-widget">
								<?php if ( !empty($sd_data['social_facebook_footer']) ) : ?>
								<li class="social-facebook"><a class="sd-bg-trans" href="<?php echo $sd_data['social_facebook_footer']; ?>" rel="nofollow" target="_blank">Facebook</a><span></span></li>
								<?php endif; ?>
								<?php if (!empty($sd_data['social_twitter_footer'])) : ?>
								<li class="social-twitter"><a class="sd-bg-trans" href="<?php echo $sd_data['social_twitter_footer']; ?>" rel="nofollow" target="_blank">Twitter</a></li>
								<?php endif; ?>
								<?php if (!empty($sd_data['social_linkedin_footer'])) : ?>
								<li class="social-linkedin"><a class="sd-bg-trans" href="<?php echo $sd_data['social_linkedin_footer']; ?>" rel="nofollow" target="_blank">LinkedIn</a></li>
								<?php endif; ?>
								<?php if (!empty($sd_data['social_googleplus_footer'])) : ?>
								<li class="social-googleplus"><a class="sd-bg-trans" href="<?php echo $sd_data['social_googleplus_footer']; ?>" rel="nofollow" target="_blank">Google Plus</a></li>
								<?php endif; ?>
								<?php if (!empty($sd_data['social_youtube_footer'])) : ?>
								<li class="social-youtube"><a class="sd-bg-trans" href="<?php echo $sd_data['social_youtube_footer']; ?>" rel="nofollow" target="_blank">Youtube</a></li>
								<?php endif; ?>
								<?php if (!empty($sd_data['social_vimeo_footer'])) : ?>
								<li class="social-vimeo"><a class="sd-bg-trans" href="<?php echo $sd_data['social_vimeo_footer']; ?>" rel="nofollow" target="_blank">Vimeo</a></li>
								<?php endif; ?>
								<?php if (!empty($sd_data['social_pinterest_footer'])) : ?>
								<li class="social-pinterest"><a class="sd-bg-trans" href="<?php echo $sd_data['social_pinterest_footer']; ?>" rel="nofollow" target="_blank">Pinterest</a></li>
								<?php endif; ?>
								<?php if (!empty($sd_data['social_instagram_footer'])) : ?>
								<li class="social-instagram"><a class="sd-bg-trans" href="<?php echo $sd_data['social_instagram_footer']; ?>" rel="nofollow" target="_blank">Instagram</a></li>
								<?php endif; ?>
								<?php if (!empty($sd_data['social_rss_footer'])) : ?>
								<li class="social-rss"><a class="sd-bg-trans" href="<?php echo $sd_data['social_rss_footer']; ?>" rel="nofollow" target="_blank">RSS</a></li>
								<?php endif; ?>
							</ul>
							<!-- subscribe end --> 
						</div>
						<!-- social footer end -->
						<?php endif; ?>
					</div>
				</div>
				<!-- copyright content end --> 
			</div>
		</div>
	</div>
	<!-- copyright container end --> 
</div>
<!-- copyright end -->
<?php wp_footer(); ?>
</body></html>