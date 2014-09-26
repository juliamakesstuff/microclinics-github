<?php
/* ------------------------------------------------------------------------ */
/* Localization
/* ------------------------------------------------------------------------ */
 
	$lang = get_template_directory() . '/framework/lang';
	load_theme_textdomain('sd-framework', $lang);

/* ------------------------------------------------------------------------ */
/* Inlcudes
/* ------------------------------------------------------------------------ */

	get_template_part('framework/inc/enqueue'); // Enqueue JavaScripts & CSS
	get_template_part('framework/inc/sidebar-generator'); // Load Unlimited Sidebars
	get_template_part('framework/inc/post-rating'); // Load Post Rating
	if ( in_array( 'appthemer-crowdfunding/crowdfunding.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	get_template_part('framework/inc/crowdfunding'); // Load Crowdfunding
	}

	/* Include TinyMce Shortcode Buttons */
	//include_once('framework/inc/tinymce/tinymce_buttons.php');
	
	/* Include Widgets */
	get_template_part('framework/inc/widgets/widgets');
	
	/* Include SMOF Theme Options */
	get_template_part('admin/index'); // Slightly Modified Options Framework

	/* Include Meta Box Script */
	function sd_load_meta_box_plugin() {
		// Re-define meta box path and URL
    	define( 'RWMB_URL', trailingslashit( get_template_directory_uri() . '/framework/inc/metabox' ) );
    	define( 'RWMB_DIR', trailingslashit( get_template_directory() . '/framework/inc/metabox' ) );
	    require_once RWMB_DIR . 'meta-box.php';
	    include 'framework/inc/metabox/the-meta-boxes.php';
	}
	
	add_action('init', 'sd_load_meta_box_plugin');
	
	// Add editor style
	add_editor_style();
	
	/* ------------------------------------------------------------------------ */
	/* Automatic Plugin Activation */
	require_once('framework/inc/plugin-activation.php');
	
	function sd_required_plugins() {
		$plugins = array(
			array(
				'name'     				=> 'Revolution Slider', // The plugin name
				'slug'     				=> 'revslider', // The plugin slug (typically the folder name)
				'source'   				=> get_template_directory_uri() . '/framework/plugins/revslider.zip', // The plugin source
				'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),
			
			array(
				'name'     				=> 'Cf Post Formats', // The plugin name
				'slug'     				=> 'cf-post-formats', // The plugin slug (typically the folder name)
				'source'   				=> get_template_directory_uri() . '/framework/plugins/cf-post-formats.zip', // The plugin source
				'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'     				=> 'Appthemer Crowdfunding', // The plugin name
				'slug'     				=> 'appthemer-crowdfunding', // The plugin slug (typically the folder name)
				'source'   				=> get_template_directory_uri() . '/framework/plugins/appthemer-crowdfunding.zip', // The plugin source
				'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'     				=> 'Easy Digital Downloads', // The plugin name
				'slug'     				=> 'easy-digital-downloads', // The plugin slug (typically the folder name)
				'source'   				=> get_template_directory_uri() . '/framework/plugins/easy-digital-downloads.zip', // The plugin source
				'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'     				=> 'SD Shortcodes', // The plugin name
				'slug'     				=> 'sd-shortcodes', // The plugin slug (typically the folder name)
				'source'   				=> get_template_directory_uri() . '/framework/plugins/sd-shortcodes.zip', // The plugin source
				'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'     				=> 'SD Events', // The plugin name
				'slug'     				=> 'sd-events', // The plugin slug (typically the folder name)
				'source'   				=> get_template_directory_uri() . '/framework/plugins/sd-events.zip', // The plugin source
				'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
				'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),
			array(
            	'name'      => 'Contact Form 7',
            	'slug'      => 'contact-form-7',
            	'required'  => false,
            )
		);
	
		/**
		 * Array of configuration settings. Amend each line as needed.
		 * If you want the default strings to be available under your own theme domain,
		 * leave the strings uncommented.
		 * Some of the strings are added into a sprintf, so see the comments at the
		 * end of each line for what each argument will be.
		 */
		$config = array(
			'domain'       		=> 'sd-framework',         		// Text domain - likely want to be the same as your theme.
			'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
			'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
			'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
			'menu'         		=> 'install-required-plugins', 	// Menu slug
			'has_notices'      	=> true,                       	// Show admin notices or not
			'is_automatic'    	=> true,					   	// Automatically activate plugins after installation or not
			'message' 			=> '',							// Message to output right before the plugins table
			'strings'      		=> array(
				'page_title'                       			=> __( 'Install Required Plugins', 'sd-framework' ),
				'menu_title'                       			=> __( 'Install Plugins', 'sd-framework' ),
				'installing'                       			=> __( 'Installing Plugin: %s', 'framework' ), // %1$s = plugin name
				'oops'                             			=> __( 'Something went wrong with the plugin API.', 'sd-framework' ),
				'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
				'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
				'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
				'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
				'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
				'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
				'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
				'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
				'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
				'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
				'return'                           			=> __( 'Return to Required Plugins Installer', 'sd-framework' ),
				'plugin_activated'                 			=> __( 'Plugin activated successfully.', 'framework' ),
				'complete' 									=> __( 'All plugins installed and activated successfully. %s', 'sd-framework' ), // %1$s = dashboard link
				'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
			)
		);
	
		tgmpa($plugins, $config);
		
	}
	
	add_action('tgmpa_register', 'sd_required_plugins');
	
/* ------------------------------------------------------------------------ */
/* Settings
/* ------------------------------------------------------------------------ */

	// Add support for WP 2.9+ post thumbnails
	if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 189, 189, true ); // default Post Thumbnail dimensions
		add_image_size( 'blog-thumbs', 770, 293, true ); // blog thumbs
		add_image_size( 'recent-blog', 65, 57, true ); // recent blog widget thumbs
		add_image_size( 'latest-blog', 270, 190, true ); // latest blog thumbs
	}
	
	function add_nofollow_cat( $text ) {
		$text = str_replace('rel="category tag"', "", $text); return $text;
	}
	
	add_filter( 'the_category', 'add_nofollow_cat' );
	
	// Preloaded image path variable
	function sd_loader_var() {
	
		$out  = '<script type="text/javascript">';
		$out .= 'var jsimagepath = \''.get_template_directory_uri().'\'' ;
		$out .= '</script>';
	
		echo $out;
	}

	add_filter('wp_head', 'sd_loader_var');
	
	// Add rel PrettyPhoto to images in post
	function sd_rel_prettyphoto($content) {
		global $post;
		
			$pattern ="/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
			$replacement = '<a$1href=$2$3.$4$5 rel="PrettyPhoto['.$post->ID.']"$6>';
			$content = preg_replace($pattern, $replacement, $content);

		return $content;
	}
	
	add_filter('the_content', 'sd_rel_prettyphoto');
	
	// Define content width
	if ( ! isset( $content_width ) ) $content_width = 1170;
	
	// Add feed links to header
	add_theme_support( 'automatic-feed-links' );
	
	// Add post formats WP 3.1+
	add_theme_support('post-formats', array( 'video', 'audio', 'gallery'));

	// Run shortcodes in widgets
	add_filter('widget_text', 'do_shortcode');
 
	// Change WP admin logo
 
	function sd_custom_login_logo() {
    	echo '<style type="text/css">
        .login h1 a { background-image:url('.get_bloginfo('template_directory').'/framework/images/admin-logo.png) !important; background-size: auto!important; width: auto; }
    	</style>';
	}
 
	add_action('login_head', 'sd_custom_login_logo');
 
	// Theme support adding changed from 'nav-menus' to just 'menus'
	add_theme_support( 'menus' );
 
	// Function for registering wp_nav_menu() in 2 locations
	function sd_register_navmenus() {
		register_nav_menus( array(
			'Header Menu'    => __( 'Header Navigation', 'framework')
			)
		);
	}

	add_action( 'init', 'sd_register_navmenus' );
	
	// Automatically add home link to the menu
	function sd_page_menu_args($args) {
	    $args['show_home'] = true;
    	return $args;
	}
	
	add_filter('wp_page_menu_args', 'sd_page_menu_args');
 
	// Register sidebars
 	function sd_register_sidebars() {
		register_sidebar( array(
			'name' => __( 'Main Sidebar', 'sd-framework' ),
			'id' => 'main-sidebar',
			'description' => '',
			'before_widget' => '<aside class="sidebar-widget clearfix">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="sd-styled-title">',
			'after_title' => '</h3>',
			) 
		);
		
		register_sidebar( array(
			'name' => __( 'Footer Left Sidebar', 'sd-framework' ),
			'id' => 'footer-left-sidebar',
			'description' => '',
			'before_widget' => '<aside class="footer-sidebar-widget clearfix">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="footer-title sd-styled-title">',
			'after_title' => '</h4>',
			) 
		);
		
		register_sidebar( array(
			'name' => __( 'Footer Middle Sidebar', 'sd-framework' ),
			'id' => 'footer-middle-sidebar',
			'description' => '',
			'before_widget' => '<aside class="footer-sidebar-widget clearfix">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="footer-title sd-styled-title">',
			'after_title' => '</h4>',
			) 
		);
		
		register_sidebar( array(
			'name' => __( 'Footer Right Sidebar', 'sd-framework' ),
			'id' => 'footer-right-sidebar',
			'description' => '',
			'before_widget' => '<aside class="footer-sidebar-widget clearfix">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="footer-title sd-styled-title">',
			'after_title' => '</h4>',
			) 
		);
	}

	add_action( 'widgets_init', 'sd_register_sidebars' );
	
	// Custom pagination
	function sd_custom_pagination($pages = '', $range = 3) {
		$showitems = ($range * 2)+1;
		
		global $paged;

		if(empty($paged)) $paged = 1;
		
		if($pages == '') {
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if(!$pages) {
				$pages = 1;
			}
		}
		
		if(1 != $pages) {
			echo "<div class=\"sd-pagination clearfix\">";
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class=\"pagi-first\" href='".get_pagenum_link(1)."'>&laquo; " . __('First', 'sd-framework') . "</a>";
			if($paged > 1 && $showitems < $pages) echo "<a class=\"pagi-previous\" href='".get_pagenum_link($paged - 1)."'>&lsaquo; " . __('', 'sd-framework') . "</a>";
			
			for ($i=1; $i <= $pages; $i++) {
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
					echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
				}
			}
		
			if ($paged < $pages && $showitems < $pages) echo "<a class=\"pagi-next\" href=\"".get_pagenum_link($paged + 1)."\">" . __('', 'sd-framework') . " &rsaquo;</a>";
			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class=\"pagi-last\" href='".get_pagenum_link($pages)."'>" . __('Last', 'sd-framework') . " &raquo;</a>";
			echo "</div>";
		}
			
	}
 
	// Filter tag clould output so that it can be styled by CSS
	function sd_style_tag_cloud($tags) {
	    $tags = preg_replace_callback("|(class='tag-link-[0-9]+)('.*?)(style='font-size: )([0-9]+)(pt;')|",
        create_function(
            '$match',
            '$low=1; $high=5; $sz=($match[4]-8.0)/(22-8)*($high-$low)+$low; return "{$match[1]} tagsz-{$sz}{$match[2]}";'
        ),
        $tags);
    	return $tags;
	}
 
	add_action('wp_tag_cloud', 'sd_style_tag_cloud');
 
	
	// Remove width and height from featured images
	
	function sd_remove_width_height( $html ) {
		$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
		
		return $html;
	}

	add_filter( 'post_thumbnail_html', 'sd_remove_width_height', 10 );
 
	// Custom raw code output
	function sd_code_filter($content_text) {
    	$content_text = preg_replace('!(<pre.*?>)(.*?)</pre>!ise', " '$1' .  stripslashes( str_replace(array('<','>'),array('<','>'),'$2') )  . '</pre>' ", $content_text);
	    return $content_text;
    }
 
	add_filter('the_content','sd_code_filter', 1, 1);
	
	// Excerpt limit portfolio
	function sd_limit_words($string, $word_limit) {
		$words = explode(' ', $string, ($word_limit + 1));
		if(count($words) > $word_limit)  array_pop($words);
		
		return implode(' ', $words);
	}
	
	// Change excerpt ending [...] to ...
	function new_excerpt_more( $more ) {
		return "...";
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
	// Custom styling of widget titles in widget panel
	function sd_custom_widgets_style() {
    	echo '
			 <style type="text/css">
			div.widget[id*=_tweets_widget-] .widget-top, div.widget[id*=_popular_posts_widget-] .widget-top, div.widget[id*=_feedburner_widget-] .widget-top, div.widget[id*=_ads_widget-] .widget-top, div.widget[id*=_recent_comments_widget-] .widget-top, div.widget[id*=_opening_hours_widget-] .widget-top, div.widget[id*=_social_icons_widget-] .widget-top, div.widget[id*=_recent_posts_widget-] .widget-top, div.widget[id*=_flickr_widget-] .widget-top, div.widget[id*=_sd_tabbed_widget-] .widget-top, div.widget[id*=_sd_recent_events_widget-] .widget-top {
	color: #00adee;
	}
			</style>
';
	}

	add_action('admin_print_styles-widgets.php', 'sd_custom_widgets_style');
	
	// Output custom CSS from standarized options

	function sd_custom_css() {

		$output = '';

		global $sd_data;

		$custom_css = ( !empty($sd_data['custom_css']) ? $sd_data['custom_css'] : '');
		
			if ($custom_css <> '') {
				$output .= $custom_css . "\n";
			}
		
		// Output styles
			if ($output <> '') {
				$output = "\n<!-- Custom Styling -->\n<style type=\"text/css\">\n" . $output . "</style>\n";
			echo $output;
			}
	}
	
	add_action('wp_head', 'sd_custom_css');
	
	// Add custom favicon
	function sd_custom_favicon() {
		global $sd_data;
		if ($sd_data['favicon'] != '') {
	        echo '<link rel="shortcut icon" href="'.  $sd_data['favicon']  .'"/>'."\n";
	    }
		else { ?>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/framework/images/favicon.ico" />
<?php }
	}

	add_action('wp_head', 'sd_custom_favicon');
	
	// Add tracking code to the footer
	function sd_tracking_code(){
		global $sd_data;
		$output = $sd_data['analytics_code'];
		if ( $output <> "" ) 
			echo stripslashes($output) . "\n";
	}
	
	add_action('wp_footer','sd_tracking_code');
	// Convert Hex Color to RGB
	// http://bavotasan.com/2011/convert-hex-color-to-rgb-using-php/
	function sd_hex2rgb($hex) {
		$hex = str_replace("#", "", $hex);

		if(strlen($hex) == 3) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
	}
   $rgb = array($r, $g, $b);
   
   return implode(", ", $rgb);
	}
	// Add PrettyPhoto rel to flexslider
	function sd_prettphoto ($content) {
		$content = preg_replace("/<a/","<a rel=\"prettyPhoto[flexslider]\"",$content,1);
		return $content;
	}
	add_filter( 'wp_get_attachment_link', 'sd_prettphoto');
	
	// Alter Author Contact Fields
	
	function sd_author_bio( $contactmethods ) {
		// Add Google Plus
		$contactmethods['googleplus'] = __('Google+ Url', 'sd-framework');
		$contactmethods['linkedin'] = __('Linked In', 'sd-framework');
		
		return $contactmethods;
	}
	
	add_filter( 'user_contactmethods', 'sd_author_bio');
	
	// Show number of comments in post excluding trackbacks/pings
	function sd_comment_count( $count ) {
		if ( ! is_admin() ) {
			global $id;
			$get_comments = get_comments('status=approve&post_id=' . $id);
			$comments_by_type = separate_comments($get_comments);
			return count($comments_by_type['comment']);
		} else {
		return $count;
		}
	}

	add_filter('get_comments_number', 'sd_comment_count', 0);
	
	// Add nofollow to reply links
	
	function sd_reply_link_nofollow( $link ) {
	global $user_ID;

	// Registration required login link is already nofollowed
	if ( get_option( 'comment_registration' ) && ! $user_ID )
		return $link;
	// Add nofollow otherwise
	else
		return str_replace( '")\'>', '")\' rel=\'nofollow\'>', $link );
	}
	
	add_filter( 'comment_reply_link', 'sd_reply_link_nofollow' );
    
	// Comments callback
	function sd_custom_comments($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
	?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>" class="comment-body clearfix">
		<div class="author-avatar"> <?php echo get_avatar($comment,$size=$args['avatar_size']); ?> </div>
		<div class="comment-text">
			<div class="author">
				<cite><?php echo get_comment_author_link(); ?></cite>
				<span class="comment-meta">| <?php echo get_comment_date( get_option('date_format') );?>
				<?php _e('at', 'sd-framework'); ?>
				<?php echo get_comment_time( get_option('time_format') );?></span>
			</div>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>
			<?php _e('You comment awaits moderation.', 'sd-framework') ?>
			</em>
			<?php endif; ?>
			<div class="comment-meta commentmetadata"> <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"></a>
				<?php edit_comment_link(__('(Edit)', 'sd-framework'),'&nbsp;&nbsp;','') ?>
			</div>
			<div class="text-of-comment">
			<span class="comment-arrow">&nbsp;</span>
				<?php comment_text(); ?>
			</div>
			<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'sd-framework' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
	</div>
	<?php // Do not include the </li> tag.
	}
	// Trackback and pings callback
	function list_pings($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
?>
<li id="comment-<?php comment_ID(); ?>">
	<?php comment_author_link(); ?>
	<?php } ?>