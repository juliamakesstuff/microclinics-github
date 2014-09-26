<?php
/* ----------------------------------------------------- */
/* Events Taxonomy */
/* ----------------------------------------------------- */

function sd_events_taxonomy() {
	register_taxonomy(
		'events_filter', 
		array('events'),
		array(
			'hierarchical'		=> true,
			'label'				=> __('Events Filters', 'sd-events'),
			'singular_label'	=> __('Events Filters', 'sd-events'),
			'rewrite'			=> true
			)
	);
}

add_action( 'init', 'sd_events_taxonomy' );

