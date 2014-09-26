<?php
/**
Plugin Name: SD Events
Plugin URI: http://skat.tf/
Description: A plugin that adds an events custom post type.
Version: 1.0
Author: Skat Design
Author URI: http://skat.tf/
*/

/**
 * Copyright (c) 2013 Skat Design. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */
 
if(!class_exists('SdEvents')) {
	 class SdEvents {
		 
		 public function __construct() {
			
			/* Localization files. */
			add_action( 'plugins_loaded', array( &$this, 'sd_events_localize' ), 1 );
			
			 /* Events Functions files. */
			add_action( 'plugins_loaded', array( &$this, 'sd_events_functions' ), 2 );
			
			/* Admin files. */
			add_action( 'plugins_loaded', array( &$this, 'sd_admin_functions' ), 3 );
		}
		
		public function sd_events_functions() {
		
			foreach ( glob( plugin_dir_path( __FILE__ )."inc/*.php" ) as $files )
		    require_once $files;
	
		}
		
		public function sd_events_localize() {

			/* Load the translation of the plugin. */
			load_plugin_textdomain( 'sd-events', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
		}
	
		public function sd_admin_functions() {

			if ( is_admin() ) {
				require_once( plugin_dir_path( __FILE__ ) . 'admin/admin-functions.php' );
			}
		}
		
	}
}

	$sd_events = new SdEvents();

?>
