<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */

function sd_register_meta_boxes( $meta_boxes ) {
	$prefix = 'sd_';


	$meta_boxes[] = array(
		'id' => 'page_options',
		'title' => 'Page Options',
		'pages' => array( 'page' ),
		'context' => 'normal',
		'priority' => 'high',

		'fields' => array(
				array(
					'name' => 'Insert a Custom Page title or leave blank for default page title.',
					'id'   => $prefix . "page-title",
					'type' => 'textarea',
					'desc' => 'HTML code accepted.'
				),
				array(
					'name'		=> 'Custom Header Page Background',
					'desc'		=> 'Upload your custom header page background (optimal size 2170x213 for full image)',
					'id'		=> $prefix . "header_page_bg",
					'type'		=> 'plupload_image',
					'max_file_uploads' => 1,
				),

				array(
					'name'		=> 'Background No Repeat',			// checkbox
					'id'		=> $prefix . "no_repeat",
					'type'		=> 'checkbox',
					'std'		=> '0',
					'desc'		=> 'Header background no repeat'
				),
				array(
					'name' => 'Background Repeat Horizontally',			// checkbox
					'id'		=> $prefix . "repeat_x",
					'type'		=> 'checkbox',
					'std'		=> '0',
					'desc'		=> 'Header background repeat horizontaly'
				),
				array(
					'name'		=> 'Background Repeat Vertically',			// checkbox
					'id'		=> $prefix . "repeat_y",
					'type'		=> 'checkbox',
					'std'		=> '0',
					'desc'		=> 'Header background repeat vertically'
		)
	)
);


	// Event Meta Box
	
	if ( post_type_exists( 'events' ) ) {
	
		$meta_boxes[] = array(
			'id' => 'event_options',
			'title' => 'Event Options',
			'pages' => array( 'events' ),
			'context' => 'normal',
			'priority' => 'high',
		
			'fields' => array(
				array(
					'name'		=> 'Date of the event',
					'id'		=> $prefix . "dov",
					'type'		=> 'date',
					// Date format, default yy-mm-dd. Optional. See: http://goo.gl/po8vf
					'format'	=> 'd MM, yy'
				),
				array(
					'name'		=> 'Time of the event',
					'id'		=> $prefix . "tov",
					'type'		=> 'text'
				),
				array(
					'name'          => 'Event Address',
					'id'            => $prefix . "event_address",
					'type'          => 'text',
					'std'           => 'Munich',     // 'latitude,longitude[,zoom]' (zoom is optional)
					'style'         => 'width: 500px; height: 300px',
				),
				array(
					'name'          => 'Event Location',
					'id'            => $prefix . "event_map",
					'type'          => 'map',
					'std'           => '',
					'style'         => 'width: 770px; height: 300px',
					'address_field' => $prefix . 'event_address',
				),
				array(
					'name'		=> 'Display the map on the page?',
					'id'		=> $prefix . "show_map",
					'type'		=> 'select',
					'options'	=> array(
					'yes'		=> 'Yes',
					'no'		=> 'No'
					),
					'std'		=> 'yes',
					'desc'		=> 'Show or hide the google map.'
				),
			)
		);
	}
	return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'sd_register_meta_boxes' );