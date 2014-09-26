<?php
/* ------------------------------------------------------------------------ */
/* Crowdfunding Plugin
/* Credits: http://astoundify.com/
/* ------------------------------------------------------------------------ */

function sd_featured_campaign() {
	if ( false === ( $campaign_id = get_transient( 'sd_featured_campaign' ) ) ) {
		$campaigns = get_posts( array(
			'post_type'   => 'download',
			'fields'      => 'ids',
			'numberposts' => 1,
			'meta_query'  => array(
				array(
					'key'   => '_campaign_featured',
					'value' => 1
				)
			)
		) );

		if ( ! empty( $campaigns ) ) {
			$campaign_id = current( $campaigns );
		} else {
			$campaigns = get_posts( array(
				'post_type'   => 'download',
				'fields'      => 'ids',
				'numberposts' => 1
			) );

			$campaign_id = current( $campaigns );
		}

		set_transient( 'sd_featured_campaign', $campaign_id, 72 * HOUR_IN_SECONDS );
	}

	return $campaign_id;
}

function sd_featured_campaign_clear_transient( $post_id) {
	global $post;

	if ( ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) || ( defined( 'DOING_AJAX') && DOING_AJAX ) || isset( $_REQUEST['bulk_edit'] ) ) 
		return $post_id;

	if ( isset( $post->post_type ) && $post->post_type == 'revision' )
		return $post_id;

	if ( ! current_user_can( 'edit_pages', $post_id ) )
		return $post_id;

	delete_transient( 'sd_featured_campaign' );
}
add_action( 'save_post', 'sd_featured_campaign_clear_transient' );

add_theme_support( 'appthemer-crowdfunding', array(
		'anonymous-backers' => true
	) );
	

function sd_is_crowdfunding() {
	return ( class_exists( 'Easy_Digital_Downloads' ) && class_exists( 'ATCF_Campaign' ) );
}
function sd_modal_button_form() {

	global $edd_options;

	if ( did_action( 'atcf_found_widget' ) )
		return;

	if ( sd_is_crowdfunding() )
		get_template_part( 'framework/inc/modal-button-form' );
}
add_action( 'wp_footer', 'sd_modal_button_form' );

function sd_contribute_modal_top_expired( $campaign ) {
	if ( $campaign->is_active() )
		return;
?>

<div class="edd_download_purchase_form">
	<h2><?php printf( __( 'This %s has ended. No more pledges can be made.', 'sd-framework' ), edd_get_label_singular() ); ?></h2>
	<?php
}
add_action( 'sd_contribute_modal_top', 'sd_contribute_modal_top_expired' );

function sd_contribute_modal_top() {
	global $edd_options;
	
	if ( isset ( $edd_options[ 'atcf_settings_custom_pledge' ] ) )
		return;
?>
	<h2><?php echo apply_filters( 'sd_pledge_custom_title', __( 'Select your pledge amount', 'sd-framework' ) ); ?></h2>
	<?php
}
add_action( 'edd_purchase_link_top', 'sd_contribute_modal_top' );


function sd_contribute_modal_bottom_expired( $campaign ) {
	if ( $campaign->is_active() )
		return;
?>
</div>
<?php
}
add_action( 'sd_contribute_modal_bottom', 'sd_contribute_modal_bottom_expired' );