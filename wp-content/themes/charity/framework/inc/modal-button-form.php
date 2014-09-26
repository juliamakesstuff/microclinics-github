<?php
/* ------------------------------------------------------------------------ */
/* Footer Modal Button Form
/* ------------------------------------------------------------------------ */
global $campaign, $post;

$campaign = atcf_get_campaign( sd_featured_campaign() );

?>

<div id="sd-modal-button-form" class="sd-modal-button-form">
	<?php 
		do_action( 'sd_contribute_modal_top', $campaign );

		if ( $campaign->is_active() ) :
			echo edd_get_purchase_link( array( 
				'download_id' => $campaign->ID,
				'class'       => '',
				'price'       => false
			) ); 
		else : // Inactive, just show options with no button
			atcf_campaign_contribute_options( edd_get_variable_prices( $campaign->ID ), 'checkbox', $campaign->ID );
		endif;
	
		do_action( 'sd_contribute_modal_bottom', $campaign ); 
	?>
</div>
