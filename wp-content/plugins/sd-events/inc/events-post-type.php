<?php
/* ----------------------------------------------------- */
/* Events Custom Post Type */
/* ----------------------------------------------------- */

function sd_register_events() {
	
	global $sd_data;

	$labels = array(
		'name'					=> __( 'Events', 'sd-events' ),
		'singular_name'			=> __( 'Event', 'sd-events' ),
		'add_new'				=> __( 'Add New Event', 'sd-events' ),
		'add_new_item'			=> __( 'Add New Event', 'sd-events' ),
		'edit_item'				=> __( 'Edit Event', 'sd-events' ),
		'new_item'				=> __( 'Add New Event', 'sd-events' ),
		'view_item'				=> __( 'View Event', 'sd-events' ),
		'search_items'			=> __( 'Search Events', 'sd-events' ),
		'not_found' 			=> __( 'No events found', 'sd-events' ),
		'not_found_in_trash'	=> __( 'No events found in trash', 'sd-events' )
	);
	
	$custom_slug = ( !empty($sd_data['events_slug']) ? $sd_data['events_slug'] : 'events-page' );
	
	$events_args = array(
		'public'				=> true,
		'publicly_queryable'	=> true,
		'show_in_nav_menus'		=> false,
		'show_in_admin_bar'		=> true,
		'exclude_from_search'	=> false,
		'show_in_menu'			=> true,
		'menu_icon'				=> plugin_dir_url(dirname(__FILE__)) . 'images/sd-events-icon.png',
		'can_export'			=> true,
		'delete_with_user'		=> false,
		'labels'				=> $labels,
		'public'				=> true,
		'show_ui'				=> true,
		'capability_type'		=> 'post',
		'hierarchical'			=> false,
		'rewrite'				=> array( 'slug' => $custom_slug, 'with_front' => false ), // Permalinks format
		'supports'				=> array( 'title', 'editor', 'thumbnail', 'comments' )
	);

	register_post_type( 'events' , $events_args );  
}

// Adds Custom Post Type
add_action('init', 'sd_register_events');
