<?php
/* ------------------------------------------------------------------------ */
/* Single Portfolio
/* ------------------------------------------------------------------------ */
?>

<div class="gallery-single-page">
  <?php $portfolio_type = rwmb_meta( 'sd_portfolio-type' ); ?>
  <?php switch($portfolio_type) {
		case 'image':
?>
  <div class="flexslider">
    <ul class="slides">
      <?php
		    $slides = rwmb_meta( 'sd_portfolio-slider', 'type=image&size=portfolio-single' );
		    if ( !empty( $slides ) ) {
		    	foreach ( $slides as $slide ) {
		    		echo "<li><a href='". $slide['full_url'] . "' rel='prettyPhoto[slides]' class='prettyPhoto'><figure><img src='". $slide['url'] . "' /></figure></a></li>";
		    	}
		    } ?>
    </ul>
  </div>
  <?php break; 
		case 'video': ?>
  <?php  
	    if ( rwmb_meta ('sd_video-type') == 'vimeo' ) {  
	        echo '<div class="sd-portfolio-video"><iframe src="http://player.vimeo.com/video/' . rwmb_meta('sd_video-item') . '?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="1170" height="658" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>';  
	    }  
	    else if ( rwmb_meta ('sd_video-type') == 'youtube') {  
	        echo '<div class="sd-portfolio-video"><iframe width="1170" height="658" src="http://www.youtube.com/embed/' . rwmb_meta('sd_video-item') . '?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe></div>';  
	    }  
	    else {  
	        echo '<div class="sd-portfolio-video" class="span12">' . do_shortcode( rwmb_meta('sd_video-item') ) . '</div>'; 
	    }  
	    ?>
  <?php break; 
	} ?>
  <div class="gallery-single-content row">
    <div class="<?php echo (rwmb_meta('sd_portfolio-details') == 1) ? 'span8' : 'span12'; ?>">
      <?php the_content(); ?>
    </div>
    <?php if (rwmb_meta('sd_portfolio-details') == 1) : ?>
    <div class="client-details span4">
      <h4>
        <?php _e('Project Details', 'sd-framework'); ?>
      </h4>
      <ul>
        <?php $client_name = rwmb_meta('sd_portfolio-client-name');
					  $client_link = rwmb_meta('sd_portfolio-client-link');
				 ?>
        <?php if ( !empty($client_name) ) : ?>
        <li><span>
          <?php _e('Client Name:', 'sd-framework'); ?>
          </span> <?php echo $client_name ?></li>
        <?php endif; ?>
        <li><span>
          <?php _e('Categories:', 'sd-framework'); ?>
          </span> <?php echo get_the_term_list( get_the_ID(), 'portfolio_filter', '', ', ' ) ?></li>
        <?php if ( !empty($client_link) ) : ?>
        <li><span>
          <?php _e('Project Url:', 'sd-framework'); ?>
          </span> <a href="<?php echo $client_link; ?>" target="_blank" rel="nofollow" title="<?php echo $client_name; ?>">
          <?php _e('Launch Project', 'sd-framework'); ?>
          </a> </li>
        <?php endif; ?>
      </ul>
    </div>
    <?php endif; ?>
  </div>
</div>