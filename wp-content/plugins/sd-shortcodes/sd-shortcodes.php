<?php
/**
Plugin Name: SD Shortcodes
Plugin URI: http://skat.tf/
Description: A shortcode plugin that adds functionality like buttons, tabs, flexible columns and more to your theme.
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
 
if(!class_exists('SdShortcodes')) {

	class SdShortcodes {

		function __construct() {

			/* Set the paths needed by the plugin. */
			add_action( 'plugins_loaded', array( &$this, 'sd_plugin_paths' ), 1 );
	    	require_once( plugin_dir_path( __FILE__ ) .'/inc/shortcodes.php' );
			add_action('wp_enqueue_scripts', array(&$this, 'sd_view_enqueue'), '999');
			add_action('admin_enqueue_scripts', array(&$this, 'sd_admin_enqueue'));
			add_action('media_buttons', array(&$this, 'sd_media_select'), 11);
		
		}
		
		function sd_plugin_paths() {

			/* Set path to the plugin directory. */
			define( 'SD_DIR', trailingslashit( plugin_dir_url( __FILE__ ) ) );

			/* Set path to the inc directory. */
			define( 'SD_INC', SD_DIR . trailingslashit( 'inc' ) );
			
			/* Set path to the css directory. */
			define( 'SD_CSS', SD_INC . trailingslashit( 'css' ) );
			
			/* Set path to the js directory. */
			define( 'SD_JS', SD_INC . trailingslashit( 'js' ) );


		}
		
		function sd_view_enqueue() {
			
			// Register scripts and styles
			wp_register_style ('shortcodes-styling', SD_CSS . 'shortcodes.css', array(), '1.0', 'all');
			wp_register_script('gmap', 'http://maps.google.com/maps/api/js?sensor=false', array('jquery'));
			wp_register_script ('shortcodes-script', SD_JS . 'shortcodes.js', array('jquery', 'jquery-ui-accordion', 'jquery-ui-tabs'), '', true);
			
			// Enqueue scripts and styles
			wp_enqueue_style ('shortcodes-styling');
			wp_enqueue_script('jquery-ui-accordion');
			wp_enqueue_script ('shortcodes-script');
			wp_enqueue_script('jquery-ui-tabs');
			wp_enqueue_script('jquery-effects-core', '', '', array('jquery'));
			wp_enqueue_script('jquery-effects-fade', '', '', array('jquery-effects-core'));
			wp_enqueue_script('gmap');
	
		}
		
		function sd_admin_enqueue($hook) {
		
			if ( $hook != 'post.php' && $hook != 'post-new.php' && $hook != 'page.php' && $hook != 'page-new.php' && $hook != 'download_page_edd-settings' )
				return;
				// Register admin scripts and styles
				wp_register_style ('shortcodes-admin-styling', SD_CSS . 'admin-style.css', array(), '1.0', 'all');
				wp_register_script ('shortcodes-admin-script', SD_JS . 'admin-custom.js', array('jquery'), '', true);

				// Enqueue admin scripts and styles
				wp_enqueue_style ('shortcodes-admin-styling');
				wp_enqueue_script('shortcodes-admin-script');
				wp_enqueue_style( 'wp-color-picker' );
				wp_enqueue_script('iris', admin_url( 'js/iris.min.js' ), array( 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch' ), false, 1);
				wp_enqueue_script('wp-color-picker', admin_url( 'js/color-picker.min.js' ), array( 'iris' ), false, 1);
				$colorpicker_l10n = array('clear' => __( 'Clear' ), 'defaultString' => __( 'Default' ), 'pick' => __( 'Select Color' ));
				wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', $colorpicker_l10n ); 
		
		}
		
		// Create media button and menu
		function sd_media_select(){
		
			if( is_admin() ) {

				$screen = get_current_screen();
				
				if( $screen->base !== 'dashboard' ) {
			
					$out  = '<ul class="sd-shortcode-menu">' . "\n";
					$out .= '<li>SD Shortcodes <span class="sd-menu-arrow"></span>' . "\n";
					$out .= '<ul>' . "\n";
					$out .= '<li><a href="'. SD_INC .'full-bg.php?width=600&height=400" class="thickbox">Full Bg</a></li>' . "\n";
					$out .= '<li><a id="sd-centered" href="#">Centered</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'columns.php?width=600&height=400" class="thickbox">Columns</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'divider.php?width=640&height=550" class="thickbox">Divider</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'buttons.php?width=600&height=550" class="thickbox">Colored Button</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'video.php?width=600&height=350" class="thickbox">Video</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'framed-image.php?width=600&height=430" class="thickbox">Framed Image</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'highlight.php?width=600&height=350" class="thickbox">Highlight</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'tooltip.php?width=600&height=410" class="thickbox">Tooltip</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'gmap.php?width=600&height=800" class="thickbox">Google Map</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'toggle.php?width=600&height=550" class="thickbox">Toggle</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'tabs.php?width=640&height=1000" class="thickbox">Tabs</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'accordion.php?width=600&height=1000" class="thickbox">Accordion</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'skill.php?width=600&height=550" class="thickbox">Skill Bar</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'pricing-table.php?width=640&height=2000" class="thickbox">Pricing Table</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'latest-blog.php?width=640&height=2000" class="thickbox">Latest Posts</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'person-info.php?width=640&height=2000" class="thickbox">Person</a></li>' . "\n";
					$out .= '<li><a href="'. SD_INC .'action-box.php?width=640&height=2000" class="thickbox">Action Box</a></li>' . "\n";
					if ( in_array( 'appthemer-crowdfunding/crowdfunding.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
						$out .= '<li><a id="sd-bar" href="#">Donation Bar</a></li>' . "\n";
						$out .= '<li><a id="sd-donations" href="#">Latest Donations</a></li>' . "\n";
					}
					$out .= '</ul>' . "\n";
					$out .= '</li>' . "\n";
					$out .= '</ul>';
	
					echo $out;
				
				}
			}
		}
	}
}
	$sd_shortcodes = new SdShortcodes();
?>