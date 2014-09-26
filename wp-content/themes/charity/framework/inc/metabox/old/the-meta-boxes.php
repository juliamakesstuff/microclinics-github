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

// Better has an underscore as last sign
$prefix = 'sd_';

global $meta_boxes;

$meta_boxes = array();



$meta_boxes[] = array(
	'id' => 'page_options',
	'title' => 'Page Options',
	'pages' => array( 'page' ),
	'context' => 'normal',

	'fields' => array(

		array(
			'name' => 'Insert a Custom Page title or leave blank for default page title.',
			'id'   => $prefix . "page-title",
			'type' => 'textarea',
			'desc' => 'HTML code accepted.'
		),
		array(
			'name'		=> 'Custom Header Page Background',
			'desc'		=> 'Upload your custom header page background (optimal size 960x94 for full image)',
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
if ( post_type_exists( 'events' ) ) {

$meta_boxes[] = array(
	'id' => 'events_item',
	'title' => 'Event Options',
	'pages' => array( 'events' ),
	'context' => 'normal',

	'fields' => array(

		array(
			'name'		=> 'Show Details?',
			'id'		=> $prefix . 'portfolio-details',
			'type'		=> 'checkbox',
			'std'		=> false
		),
		
		array(
			'name'		=> 'Client Name',
			'id'		=> $prefix . 'portfolio-client-name',
			'desc'		=> 'Will not be displayed if left blank',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		array(
			'name'		=> 'Client Link',
			'id'		=> $prefix . 'portfolio-client-link',
			'desc'		=> 'Url of the client if available (Begin with http://)',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Portfolio Item Type',
			'id'		=> $prefix . 'portfolio-type',
			'desc'		=> 'Select the type of the portfolio item',
			'type'		=> 'select',
			'options'	=> array(
				'image'	=> 'Image/Gallery',
				'video'	=> 'Video'
			),
			'multiple'	=> false,
			'std'		=> array( 'no' )
		),

		array(
			'name'	=> 'Portfolio Slider Images',
			'desc'	=> 'Upload up to 20 images for the slider - or only one to display a single image. <br /><br /><strong>Note:</strong> The Preview Image will be the Image set as Featured Image.',
			'id'	=> $prefix . 'portfolio-slider',
			'type'	=> 'plupload_image',
			'max_file_uploads' => 20,
		),
		array(
			'name'		=> 'Video Type',
			'id'		=> $prefix . 'video-type',
			'type'		=> 'select',
			'options'	=> array(
				'youtube'		=> 'Youtube',
				'vimeo'			=> 'Vimeo',
				'own'			=> 'Custom Embed Code'
			),
			'multiple'	=> false,
			'std'		=> array( 'no' )
		),
		array(
			'name'	=> 'Video ID, your Custom Embed Code or [video/audio] shortcode<br />(Audio Embed Code is possible, too)',
			'id'	=> $prefix . 'video-item',
			'desc'	=> 'Insert the ID of the video (E.g. http://www.youtube.com/watch?v=<strong>1iIZeIy7TqM</strong>) or insert your custom Embed Code. <br /><strong>Note:</strong> The Preview Image will be the Image set as Featured Image.',
			'type' 	=> 'textarea',
			'std' 	=> "",
			'cols' 	=> "40",
			'rows' 	=> "8"
		)
	)
);
}

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function sd_register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'sd_register_meta_boxes' );

