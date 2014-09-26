<?php

/* ------------------------------------------------------------------------ */
/* Shortcode Formatter
/* ------------------------------------------------------------------------ */

if (!function_exists('sd_shortcodes_formatter')) {
	function sd_shortcodes_formatter($content) {
		$shortcodes = join("|",array("sd_full_width", "sd_centered", "one_third", "one_third_last", "two_third", "two_third_last", "one_half", "one_half_last", "one_fourth", "one_fourth_last", "three_fourth", "three_fourth_last", "one_fifth", "one_fifth_last", "two_fifth", "two_fifth_last", "three_fifth", "three_fifth_last", "four_fifth", "four_fifth_last", "one_sixth", "one_sixth_last", "five_sixth", "five_sixth_last", "divider", "sd_video", "framed_image", "highlight", "tooltip", "skill", "googlemap", "toggle", "tabs", "tab", "accordions", "button", "pricing_table", "pricing_column", "sd_blog"));

		// opening tag
		$replace = preg_replace("/(<p>)?\[($shortcodes)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);

		// closing tag
		$replace = preg_replace("/(<p>)?\[\/($shortcodes)](<\/p>|<br \/>)/","[/$2]",$replace);

		return $replace;
	}
	add_filter('the_content', 'sd_shortcodes_formatter');
	add_filter('widget_text', 'sd_shortcodes_formatter');
}

/* ------------------------------------------------------------------------ */
/* Full Width Section
/* ------------------------------------------------------------------------ */
if (!function_exists('sd_full_bg')) {
	function sd_full_bg( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bg'    => '#f5f219',
			'text'    => '#1e1d1c'
		    ), $atts));
			
		$bgcolor = ( !empty($bg) ? 'style="background-color: '. $bg .'; color: ' . $text . ';"' : '' );
		return '<div class="sd-full-width-bg" ' . $bgcolor . '>' . do_shortcode($content) . '</div>';
	}
	add_shortcode('sd_full_bg', 'sd_full_bg');
}

/* ------------------------------------------------------------------------ */
/* Centered Box Section
/* ------------------------------------------------------------------------ */
if (!function_exists('sd_center_box')) {
	function sd_center_box( $atts, $content = null ) {
		extract(shortcode_atts(array(
		    ), $atts));
		return '<div class="container">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('sd_centered', 'sd_center_box');
}

/* ------------------------------------------------------------------------ */
/* Columns
/* ------------------------------------------------------------------------ */
if (!function_exists('sd_one_third')) {
	function sd_one_third( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="one-third '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_third', 'sd_one_third');
}

if (!function_exists('sd_one_third_last')) {
	function sd_one_third_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="one-third last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('one_third_last', 'sd_one_third_last');
}

if (!function_exists('sd_two_third')) {
	function sd_two_third( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="two-third '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('two_third', 'sd_two_third');
}

if (!function_exists('sd_two_third_last')) {
	function sd_two_third_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="two-third last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('two_third_last', 'sd_two_third_last');
}

if (!function_exists('sd_one_half')) {
	function sd_one_half( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="one-half '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_half', 'sd_one_half');
}

if (!function_exists('sd_one_half_last')) {
	function sd_one_half_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="one-half last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('one_half_last', 'sd_one_half_last');
}

if (!function_exists('sd_one_fourth')) {
	function sd_one_fourth( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="one-fourth '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_fourth', 'sd_one_fourth');
}

if (!function_exists('sd_one_fourth_last')) {
	function sd_one_fourth_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="one-fourth last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('one_fourth_last', 'sd_one_fourth_last');
}

if (!function_exists('sd_three_fourth')) {
	function sd_three_fourth( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="three-fourth '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('three_fourth', 'sd_three_fourth');
}

if (!function_exists('sd_three_fourth_last')) {
	function sd_three_fourth_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="three-fourth last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('three_fourth_last', 'sd_three_fourth_last');
}

if (!function_exists('sd_one_fifth')) {
	function sd_one_fifth( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="one-fifth '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_fifth', 'sd_one_fifth');
}

if (!function_exists('sd_one_fifth_last')) {
	function sd_one_fifth_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="one-fifth last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('one_fifth_last', 'sd_one_fifth_last');
}

if (!function_exists('sd_two_fifth')) {
	function sd_two_fifth( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="two-fifth '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('two_fifth', 'sd_two_fifth');
}

if (!function_exists('sd_two_fifth_last')) {
	function sd_two_fifth_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="two-fifth last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('two_fifth_last', 'sd_two_fifth_last');
}

if (!function_exists('sd_three_fifth')) {
	function sd_three_fifth( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="three-fifth '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('three_fifth', 'sd_three_fifth');
}

if (!function_exists('sd_three_fifth_last')) {
	function sd_three_fifth_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="three-fifth last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('three_fifth_last', 'sd_three_fifth_last');
}

if (!function_exists('sd_four_fifth')) {
	function sd_four_fifth( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="four-fifth '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('four_fifth', 'sd_four_fifth');
}

if (!function_exists('sd_four_fifth_last')) {
	function sd_four_fifth_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="four-fifth last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('four_fifth_last', 'sd_four_fifth_last');
}

if (!function_exists('sd_one_sixth')) {
	function sd_one_sixth( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="one-sixth '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('one_sixth', 'sd_one_sixth');
}

if (!function_exists('sd_one_sixth_last')) {
	function sd_one_sixth_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="one-sixth last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('one_sixth_last', 'sd_one_sixth_last');
}

if (!function_exists('sd_five_sixth')) {
	function sd_five_sixth( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="five-sixth '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('five_sixth', 'sd_five_sixth');
}

if (!function_exists('sd_five_sixth_last')) {
	function sd_five_sixth_last( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bdr'    => '',
			'bdl'    => '',
			'bdt'    => '',
			'bdb'    => '',
		    ), $atts));
		return '<div class="five-sixth last '. $bdr . $bdl . $bdt . $bdb . '">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
	}
	add_shortcode('five_sixth_last', 'sd_five_sixth_last');
}
/* ------------------------------------------------------------------------ */
/* Dividers
/* ------------------------------------------------------------------------ */

if (!function_exists('sd_divider')) {
	function sd_divider( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'type'    => 'space',
			'margintop'    => '30',
			'marginbottom'    => '30'
		    ), $atts));
		
		return '<div style="padding-bottom: ' . $marginbottom . 'px; margin-top: ' . $margintop . 'px;" class="'. $type .'-divider"></div>';
	}
	add_shortcode('divider', 'sd_divider');
}

/* ------------------------------------------------------------------------ */
/* Video
/* ------------------------------------------------------------------------ */

if (!function_exists('sd_video')) {
	function sd_video($atts) {
		extract(shortcode_atts(array(
			'type' 	=> '',
			'id' 	=> '',
			'align' 	=> '',
			'autoplay' 	=> ''
		), $atts));
	
		$video_align = '';
	
		if ( $align == 'left' ) {
			$video_align = 'alignleft';
		}
		else if ( $align == 'right' ) {
			$video_align = 'alignright';
		}
		else if ( $align =='center' ) {
			$video_align = 'aligncenter';
		}
		else {
			$video_algin = '';
		}

	
		$autoplay = ($autoplay == 'yes' ? '1' : false);
		
		if($type == "vimeo") { 
			$return = "<div class='video-embed $video_align'><iframe src='http://player.vimeo.com/video/$id?autoplay=$autoplay&amp;title=0&amp;byline=0&amp;portrait=0' class='iframe'></iframe></div>";
		}
		
		else if ($type == "youtube") {
			 $return = "<div class='video-embed $video_align'><iframe src='http://www.youtube.com/embed/$id?HD=1;rel=0;showinfo=0&amp;autoplay=$autoplay' class='iframe'></iframe></div>";
		}
	
		if (!empty($id)){
			return $return;
		}
	}
	add_shortcode('sd_video', 'sd_video');
}

/* ------------------------------------------------------------------------ */
/* Framed Images
/* ------------------------------------------------------------------------ */

if (!function_exists('sd_framed_image')) {
	function sd_framed_image($atts, $content = null){
		extract(shortcode_atts(array(
			'align' => ''
		), $atts));
	
		$img_align = (!empty($align) ? 'align-' . $align : '');
		
		return '<span class="framed-img ' . $img_align . '">' . do_shortcode($content) . '</span>';
	}
	add_shortcode('framed_image', 'sd_framed_image');
}

/* ------------------------------------------------------------------------ */
/* Highlights
/* ------------------------------------------------------------------------ */

if (!function_exists('sd_highlight')) {
	function sd_highlight($atts, $content = null) {
		extract(shortcode_atts(array(
			'bg' => '',
			'text' => ''
		), $atts));

		return '<span style="background-color:'. $bg .'; color: '. $text .';" class="sd-highlight">' . $content . '</span>';
	}
	add_shortcode('highlight','sd_highlight');
}

/* ------------------------------------------------------------------------ */
/* Tooltip
/* ------------------------------------------------------------------------ */

if (!function_exists('sd_tooltip')) {
	function sd_tooltip($atts, $content = null) {
		extract(shortcode_atts(array(
	    'text' => ''
	), $atts));

		return '<b data-tooltip="'. $text .'">'. $content .'</b>';
	}
	add_shortcode('tooltip','sd_tooltip');
}

/* ------------------------------------------------------------------------ */
/* Skill set
/* ------------------------------------------------------------------------ */

if (!function_exists('sd_skill_set')) {
	function sd_skill_set( $atts, $content = null ) {
		extract(shortcode_atts(array(
       		'percentage' => '0',
			'color' => '#6ADCFA',
    	   	'title'      => ''
	    ), $atts));
		
		return '<div class="skill-title">' . $title . '</div>
					<div class="skill" data-perc="' . $percentage . '">
					<div class="skill-bar" style="background-color: ' . $color . ';"></div>
				</div>';
	}
	add_shortcode('skill', 'sd_skill_set');
}
/*-----------------------------------------------------------------------------------*/
/*	Google Map
/*-----------------------------------------------------------------------------------*/

if (!function_exists('sd_google_map')) {
	function sd_google_map($atts) {

		// default atts
		$atts = shortcode_atts(array(	
		'lat'   => '0', 
		'lon'    => '0',
		'id' => 'map',
		'zoom' => '15',
		'width' => '400',
		'height' => '300',
		'maptype' => 'ROADMAP',
		'address' => '',
		'marker' => '',
		'markerimage' => '',
		'traffic' => 'no',
		'bike' => 'no',
		'infowindow' => '',
		'infowindowdefault' => 'yes',
		'hidecontrols' => 'false',
		'scale' => 'false',
		'scrollwheel' => 'true'		
	), $atts);
								
		$returnme = '<div id="' .$atts['id'] . '" style="width:' . $atts['width'] . 'px;height:' . $atts['height'] . 'px;" class="google_map"></div>';

	$returnme .= '
	
	<script type="text/javascript">
		var latlng = new google.maps.LatLng(' . $atts['lat'] . ', ' . $atts['lon'] . ');
		var myOptions = {
			zoom: ' . $atts['zoom'] . ',
			center: latlng,
			scrollwheel: ' . $atts['scrollwheel'] .',
			scaleControl: ' . $atts['scale'] .',
			disableDefaultUI: ' . $atts['hidecontrols'] .',
			mapTypeId: google.maps.MapTypeId.' . $atts['maptype'] . '
		};
		var ' . $atts['id'] . ' = new google.maps.Map(document.getElementById("' . $atts['id'] . '"),
		myOptions);
		';
		
		//traffic
		if($atts['traffic'] == 'yes')
		{
			$returnme .= '
			var trafficLayer = new google.maps.TrafficLayer();
			trafficLayer.setMap(' . $atts['id'] . ');
			';
		}
	
		//bike
		if($atts['bike'] == 'yes')
		{
			$returnme .= '			
			var bikeLayer = new google.maps.BicyclingLayer();
			bikeLayer.setMap(' . $atts['id'] . ');
			';
		}
		//address
		if($atts['address'] != '')
		{
			$returnme .= '
		    var geocoder_' . $atts['id'] . ' = new google.maps.Geocoder();
			var address = \'' . $atts['address'] . '\';
			geocoder_' . $atts['id'] . '.geocode( { \'address\': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					' . $atts['id'] . '.setCenter(results[0].geometry.location);
					';
					
					if ($atts['marker'] !='')
					{
						//add custom image
						if ($atts['markerimage'] !='')
						{
							$returnme .= 'var image = "'. $atts['markerimage'] .'";';
						}
						$returnme .= '
						var marker = new google.maps.Marker({
							map: ' . $atts['id'] . ', 
							';
							if ($atts['markerimage'] !='')
							{
								$returnme .= 'icon: image,';
							}
						$returnme .= '
							position: ' . $atts['id'] . '.getCenter()
						});
						';

						//infowindow
						if($atts['infowindow'] != '') 
						{
							//first convert and decode html chars
							$thiscontent = htmlspecialchars_decode($atts['infowindow']);
							$returnme .= '
							var contentString = \'' . $thiscontent . '\';
							var infowindow = new google.maps.InfoWindow({
								content: contentString
							});
										
							google.maps.event.addListener(marker, \'click\', function() {
							  infowindow.open(' . $atts['id'] . ',marker);
							});
							';

							//infowindow default
							if ($atts['infowindowdefault'] == 'yes')
							{
								$returnme .= '
									infowindow.open(' . $atts['id'] . ',marker);
								';
							}
						}
					}
			$returnme .= '
				} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
			});
			';
		}

		//marker: show if address is not specified
		if ($atts['marker'] != '' && $atts['address'] == '')
		{
			//add custom image
			if ($atts['markerimage'] !='')
			{
				$returnme .= 'var image = "'. $atts['markerimage'] .'";';
			}

			$returnme .= '
				var marker = new google.maps.Marker({
				map: ' . $atts['id'] . ', 
				';
				if ($atts['markerimage'] !='')
				{
					$returnme .= 'icon: image,';
				}
			$returnme .= '
				position: ' . $atts['id'] . '.getCenter()
			});
			';

			//infowindow
			if($atts['infowindow'] != '') 
			{
				$returnme .= '
				var contentString = \'' . $atts['infowindow'] . '\';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
							
				google.maps.event.addListener(marker, \'click\', function() {
				  infowindow.open(' . $atts['id'] . ',marker);
				});
				';
				//infowindow default
				if ($atts['infowindowdefault'] == 'yes')
				{
					$returnme .= '
						infowindow.open(' . $atts['id'] . ',marker);
					';
				}				
			}
		}
		
		$returnme .= '</script>';
		
		
		return $returnme;
	}
	add_shortcode('googlemap', 'sd_google_map');
}
/*-----------------------------------------------------------------------------------*/
/*	Toggle
/*-----------------------------------------------------------------------------------*/

if (!function_exists('sd_toggle')) {
	function sd_toggle($atts, $content = null, $code) {
		extract(shortcode_atts(array(
			'title' => false
		), $atts));
	
	return '<div class="toggle">
				<h4 class="toggle-title">' . $title . '<span></span></h4>
				<div class="toggle-content">' . do_shortcode(trim($content)) . '</div>
			</div>';
	
	}
	add_shortcode('toggle', 'sd_toggle');
}
/*-----------------------------------------------------------------------------------*/
/*	Tabs
/*-----------------------------------------------------------------------------------*/

if (!function_exists('sd_tabs')) {
	function sd_tabs( $atts, $content = null ) {
		extract( shortcode_atts(array(
			'type' => ''
		), $atts ) );
		
		$tab_type = ( $type == 'vertical' ? 'sd-vertical-tabs' : '' );
		
		STATIC $i = 0;
		$i++;

		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		
		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		
		$out = '';
		
		if( count($tab_titles) ){
		    $out .= '<div id="sd-tabs-'. $i .'" class="sd-tabs sd-tabs-visibility no-js '. $tab_type .' "><div class="sd-tab-content">';
			$out .= '<ul class="clearfix sd-tab-titles">';
			
			foreach( $tab_titles as $tab ){
				$out .= '<li><a href="#sd-tab-'. sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';
			}
		    
		    $out .= '</ul>';
		    $out .= do_shortcode( $content );
		    $out .= '</div></div>';
		} else {
			$out .= do_shortcode( $content );
		}
		
		return $out;
	}
	add_shortcode( 'tabs', 'sd_tabs' );
}

if (!function_exists('sd_tab')) {
	function sd_tab( $atts, $content = null ) {
		$defaults = array( 'title' => 'Tab Title' );
		extract( shortcode_atts( $defaults, $atts ) );
		
		return '<div id="sd-tab-'. sanitize_title( $title ) .'" class="sd-tab">'. do_shortcode( $content ) .'</div>';
	}
	add_shortcode( 'tab', 'sd_tab' );
}

/*-----------------------------------------------------------------------------------*/
/*	Accordion
/*-----------------------------------------------------------------------------------*/

if (!function_exists('sd_accordion')) {
	function sd_accordion($atts, $content = null, $code) {
		extract(shortcode_atts(array(
			'state' => 'closed'
		), $atts));

		if (!preg_match_all("/(.?)\[(accordion)\b(.*?)(?:(\/))?\](?:(.+?)\[\/accordion\])?(.?)/s", $content, $matches)) {
			return do_shortcode($content);
		} else {
			for($i = 0; $i < count($matches[0]); $i++) {
				$matches[3][$i] = shortcode_parse_atts($matches[3][$i]);
			}
	
			$output = '';
		
			for($i = 0; $i < count($matches[0]); $i++) {
				$output .= '<h4>'. $matches[3][$i]['title'] .'</h4>';
				$output .= '<div class="accordion-content">' . do_shortcode(trim($matches[5][$i])) . '</div>';
			}

			return '<div data-id="'. $state .'" class="accordion">' . $output . '</div>';
		}
	}
	add_shortcode('accordions', 'sd_accordion');
}
/*-----------------------------------------------------------------------------------*/
/*	Colored Buttons
/*-----------------------------------------------------------------------------------*/

if (!function_exists('sd_colored_buttons')) {
	function sd_colored_buttons( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'link'	=> '#',
			'target'	=> '',
			'bgcolor'	=> '',
			'textcolor'	=> '',
			'size'	=> '',
			'radius'	=> '',
			'align'	=> '',
			'rel'	=> '',
			'class' => ''
		), $atts));
		
		$bgcolor = (!empty($bgcolor) ? $bgcolor : '#f00000');
		$textcolor = (!empty($textcolor) ? $textcolor : '#ffffff');
		$align = ($align) ? ' align'.$align : '';
		$nofollow = (!empty($rel) ? 'rel="'.$rel.'"' : '' );
		$button_target = (!empty($target) ? 'target="'.$target.'"' : '' );
		$border_radius = (!empty($radius) ? ' border-radius: '. $radius. ';' : '' );
	
		return '<a style="background-color: '. $bgcolor .'; color: '. $textcolor .';'. $border_radius .'" ' . $button_target . ' class="sd-button '. $size . ' ' . $align . ' ' . $class . '" href="' . $link . '" ' . $nofollow . '> ' . $content . '</a>';
	}
	add_shortcode('button', 'sd_colored_buttons');
}
/*-----------------------------------------------------------------------------------*/
/*	Pricing Table
/*-----------------------------------------------------------------------------------*/

if (!function_exists('sd_pricing_table')) {
	function sd_pricing_table($atts, $content = null) {
		extract(shortcode_atts(array(
		), $atts));

		return '<div class="pricing-table clearfix">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('pricing_table','sd_pricing_table');
}

// pricing table header

if (!function_exists('sd_pricing_column')) {
	function sd_pricing_column($atts, $content = null) {
		extract(shortcode_atts(array(
			'title' => '',
			'width' => '',
			'featured' => '',
			'price' => '',
			'decimals' => '',
			'desc' => '',
			'button_text' => '',
			'button_url' => '',
			'button_target' => '',
			'button_rel' => '',
			'button_color' => '',
			'border_color' => ''
		), $atts));
		
		$width = (!empty($width) ? 'style="width: '. $width .';"' : '');
		$featured = ($featured == 'yes' ? 'pricing-featured' : '');
		$decimals = (!empty($decimals) ? '<sup>'. $decimals .'</sup>' : '');
		$desc = (!empty($desc) ? '<div class="pricing-desc">'. $desc .'</div>' : '');
		$button_target = (!empty($button_target) ? 'target="'. $button_target .'"' : '');
		$button_rel = (!empty($button_rel) ? 'rel="'. $button_rel .'"' : '');
		$button_color = (!empty($button_color) ? 'style="background-color: '. $button_color .';"' : '');
		$border_color = (!empty($border_color) ? 'style="border-bottom-color: '. $border_color .';"' : '');
		
		$out =  '<div '. $width .' class="pricing-column '. $featured .'">';
		$out .= '<div '. $border_color .' class="pricing-header">'. $title .'</div>';
		$out .= '<div class="pricing-price">'. $price . $decimals .'</div>';
		$out .= $desc;
		$out .= $content;
		$out .= '<a class="pricing-button" '. $button_color .' href="'. $button_url .'" '. $button_target .' '. $button_rel .'>'. $button_text .'</a>';
		$out .= '</div>';

		return $out;
	}
	add_shortcode('pricing_column','sd_pricing_column');
}

/*-----------------------------------------------------------------------------------*/
/*	Latest blog items
/*-----------------------------------------------------------------------------------*/

if (!function_exists('sd_latest_blog_items')) {
	function sd_latest_blog_items($atts){
		extract(shortcode_atts(array(
			'cats'	=>	''
		), $atts));
    
	global $post;

	$args = array(
		'post_type' => 'post',
		'cat' => $cats,
		'posts_per_page' => 4,
		'order'          => 'DESC',
		'orderby'        => 'date',
		'post_status'    => 'publish'
    );

    query_posts( $args );

    $out = '';
	
	$out .= '<div class="container sd-latest-blog">
				<div class="row">';
	
	if( have_posts() ) :

		while ( have_posts() ) : the_post();
		
			
		ob_start();
		
		get_template_part( 'framework/inc/post-formats/recent-posts-shortcode/content', get_post_format() );
		
		$out .= ob_get_clean();				
			

		endwhile;
		
		$out .= '	</div>
				 </div>';
		
		wp_reset_query();
	
	endif;

	return $out;	
		
	}
	add_shortcode('sd_blog','sd_latest_blog_items');
}

/*-----------------------------------------------------------------------------------*/
/*	Person
/*-----------------------------------------------------------------------------------*/
if (!function_exists('sd_person_info')) {
	function sd_person_info($atts, $content = null) {
		extract(shortcode_atts(array(
		'photo' 	=> '',
		'name' 	=> '',
		'subtitle'	=> '',
		'facebook'	=> '',
		'twitter'	=> '',
		'googleplus'	=> '',
		'linkedin'	=> ''
		), $atts));
	
		$image = ( !empty($photo) ) ? '<img src="' . $photo . '" alt="' .$name. '" title="' .$name. '" />' : '';
	
		$facebook = ( !empty($facebook)) ? '<li class="sd-person-facebook"><a class="sd-bg-trans" href="'. $facebook .'"><i class="fa fa-facebook"></i></a></li>' : '';
		$twitter = ( !empty($twitter)) ? '<li class="sd-person-twitter"><a class="sd-bg-trans" href="'. $twitter .'"><i class="fa fa-twitter"></i></a></li>' : '';
		$googleplus = ( !empty($googleplus)) ? '<li class="sd-person-googleplus"><a class="sd-bg-trans" href="'. $googleplus .'"><i class="fa fa-google-plus"></i></a></li>' : '';
		$linkedin = ( !empty($linkedin)) ? '<li class="sd-person-linkedin"><a class="sd-bg-trans" href="'. $linkedin .'"><i class="fa fa-linkedin"></i></a></li>' : '';
	
		$social_list = ( !empty($facebook) || !empty($twitter) || !empty($googleplus) || !empty($linkedin) ) ? '
		<ul class="clearfix">
		'. $facebook . $twitter . $googleplus . $linkedin . '
		</ul>
		' : '';
	
		$subtitle = ( !empty($subtitle) ) ? '<h5>' . $subtitle . '</h5>' : '';
	
		$out = '
			<div class="sd-organizer">
			' . $image . '
				<div class="sd-organizer-details">
					<h3>' . $name . '</h3>
					' . $subtitle . $social_list .'
				</div>
			</div>
		';

		return $out;
	}
	add_shortcode('sd_person','sd_person_info');
}
if ( in_array( 'appthemer-crowdfunding/crowdfunding.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
/*-----------------------------------------------------------------------------------*/
/*	Percentage Bar
/*-----------------------------------------------------------------------------------*/

if (!function_exists('sd_percentage_bar')) {
	function sd_percentage_bar($atts, $content = null){
		extract(shortcode_atts(array(
		'button_text' => 'DONATE NOW!'
		), $atts));
		
		
	global $campaign, $post, $page_full, $blog_masonry;

	$campaign = atcf_get_campaign( sd_featured_campaign() );
	$post = get_post( $campaign->ID ); 
	setup_postdata( $post );

	$sd_percent = $campaign->percent_completed( 'raw' ) > 100 ? '100%' : $campaign->percent_completed();
	$sd_goal = rtrim( rtrim( $campaign->goal(), '0' ), '.' );
	$sd_current_ammount = rtrim( rtrim( $campaign->current_amount(), '0'), '.' );
 	
	ob_start();	?>
	
	<div class="sd-fund-percent <?php if ( $blog_masonry == true ) echo 'sd-display-none'; ?>">
	<div class="row">
	
	<div class="<?php if ( $page_full == false ) { echo 'span6'; } else { echo 'span10'; } ?>">
	<div class="skill" data-perc="<?php echo substr($sd_percent, 0, -1); ?>">
		<div class="skill-bar">
			<?php if ( $campaign->percent_completed( 'raw' ) > 0 ) : ?>
			<span class="sd-funded"><?php printf( __( '%s', 'sd-framework' ), $campaign->percent_completed() ); ?></span>
			<?php endif; ?>
		</div>
		<span class="sd-raised"><?php printf( __( '%s Raised', 'sd-framework' ), $sd_current_ammount ); ?></span>
			<?php if ( ! $campaign->is_endless() ) : ?>
		<span class="sd-days"><span><?php printf( __( '%s Days Left', 'sd-framework' ), $campaign->days_remaining() ); ?></span></span>
			<?php endif; ?>
		<span class="sd-goal"><?php printf( __( 'Goal: %s', 'sd-framework' ), $sd_goal ); ?></span> </div>
	</div>
	
	<div class="span2">
		<a class="sd-donate-button pull-right" href="#sd-modal-button-form" rel="prettyPhoto"><?php echo $button_text; ?></a>
	</div>
	
	
	</div>
</div>
<?php
	
		return ob_get_clean();
	}
	
	add_shortcode('sd_percentage','sd_percentage_bar');
}

/*-----------------------------------------------------------------------------------*/
/*	Latest Donations
/*-----------------------------------------------------------------------------------*/

if (!function_exists('sd_backers')) {
	function sd_backers($atts, $content = null){
		extract(shortcode_atts(array(
		), $atts));
		
		
	global $campaign, $post;

	$campaign = atcf_get_campaign( sd_featured_campaign() );
	$post = get_post( $campaign->ID ); 
	setup_postdata( $post );
	$sd_backers     = $campaign->backers();
 	
	ob_start();
?>
	
	<?php
	// featured campaign backers
	if ( ! empty( $sd_backers ) ) : ?>
<div class="sd-backers clearfix">
	<ul>
<?php				
	$i = 0;
	foreach ( $sd_backers as $sd_backer ) : 

		$sd_payment_id = get_post_meta( $sd_backer->ID, '_edd_log_payment_id', true );
		$sd_payment    = get_post( $sd_payment_id );

		if ( ! is_object( $sd_payment ) )
			continue;

		$sd_meta       = edd_get_payment_meta( $sd_payment->ID );
		$sd_user_info  = edd_get_payment_meta_user_info( $sd_payment_id );

		if ( empty( $sd_user_info ) )
			continue;
	
		$sd_anonymous       = isset ( $sd_meta[ 'anonymous' ] ) ? $sd_meta[ 'anonymous' ] : 0;
?>
		<li><span class="sd-backer-avatar"><?php echo get_avatar( $sd_anonymous ? '' : $sd_user_info[ 'email' ], 85 ); ?></span>
			<h4>
				<?php if ( $sd_anonymous ) : ?>
					<?php _ex( 'Anonymous', 'Donor chose to hide their name', 'sd-framework' ); ?>
				<?php else : ?>
					<?php echo $sd_user_info[ 'first_name' ]; ?> <?php echo $sd_user_info[ 'last_name' ]; ?>
				<?php endif; ?>
			</h4>
			<p><span class="sd-donated"><?php _e('Donated', 'sd-framework'); ?></span><span class="sd-amount"><?php echo rtrim( rtrim( edd_payment_amount( $sd_payment_id ), '0'), '.' ); ?></span></p>
		</li>
		
	<?php if ($i++ == 4) break; endforeach;  ?>
	</ul>
	
</div>
<?php endif; ?>	
<?php
		return ob_get_clean();
	}
	
	add_shortcode('sd_donations','sd_backers');
}
}

/*-----------------------------------------------------------------------------------*/
/*	Call to Action Box
/*-----------------------------------------------------------------------------------*/

if (!function_exists('sd_action_box')) {
	function sd_action_box( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'bgcolor'	=> '#f5f219',
			'textcolor'	=> '#1e1d1c'
		), $atts));
	
	$out = '<div class="sd-action-box" style="background-color: '. $bgcolor .'; color: '. $textcolor .';">
			' .do_shortcode( $content ). '
			</div>';
	
	return $out;
	
	}
	add_shortcode('sd_action_box', 'sd_action_box');
}