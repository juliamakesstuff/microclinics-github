<?php
/* ------------------------------------------------------------------------ */
/* Theme Header
/* ------------------------------------------------------------------------ */
global $sd_data, $page_full, $blog_masonry, $sd_page_template;

if ( is_page_template('full-width-page.php') ) { $page_full = true; } else { $page_full = false; }
if ( is_page_template('blog-masonry.php') ) { $blog_masonry = true; } else { $blog_masonry = false; }
if ( is_page_template('blog-news-style2.php') ) { $sd_page_template = true; } else { $sd_page_template = false; }

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php if ( $sd_data['responsive_mode'] == 1 ) : ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php endif; ?>
<meta name="description" content="<?php echo get_bloginfo('name'); ?>" />
<title>
<?php if (is_front_page()) {
	echo get_bloginfo('name').' - '. get_bloginfo( 'description' );
	}
	elseif ( is_single() ) {
		wp_title('');
		}
		elseif (is_page()) {
			wp_title(''); echo ' | '; echo get_bloginfo('name');
			}
			elseif (is_category()) {
				single_cat_title(); echo ' | '; echo get_bloginfo('name');
				}
				elseif (is_month()) {
					echo 'Archive for '; echo the_time('F, Y');
					}
					elseif (is_tag()) {
						echo 'Items tagged '; echo single_tag_title();
						}
						else {
							wp_title('');
							}
?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/framework/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(''); ?>>
<!-- header -->
<header id="header" class="clearfix">
	<div class="container"> 
		<!-- blog title logo -->
		<div class="sd-site-title">
			<h1 class="site-title">
				<?php if ( $logo = $sd_data['logo'] ) { ?>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <img src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" /></a>
				<?php } else { ?>
				<span class="text-logo"> <a name="top" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <?php echo get_bloginfo( 'name' );	?> </a> </span>
				<?php } ?>
			</h1>
		</div>
		<!-- blog title logo end --> 
		<!-- primary menu -->
		<nav id="main-menu" class="main-menu">
			<?php
			// Using wp_nav_menu() to display menu
			wp_nav_menu( array(
				'menu' => 'Main Menu', // Select the menu to show by Name
				'class' => 'sf-menu',
				'menu_class' =>'sf-menu',
				'menu_id' => 'menu-nav',
				'container' => false, // Remove the navigation container div
				'theme_location' => 'Header Menu'
				)
			);
		?>
		</nav>
		<!-- primary menu end--> 
	</div>
</header>
<!-- header end -->
<?php if ( is_front_page() ) : ?>
<div class="sd-slider-wrapper <?php if ( is_front_page() && $sd_data['intro_box'] == 1 && $sd_data['intro_box_type'] == 'boxed' ) echo 'sd-slider-wrapper-margin'; ?>">
<?php if ($sd_data['home_slider'] == 1) : ?>
	<?php if ( function_exists( putRevSlider( 'homeslider' )) ); ?>
<?php endif; ?>

<?php if ( is_front_page() && $sd_data['intro_box'] == 1 && $sd_data['intro_box_type'] == 'boxed' ) : ?>
<div class="sd-intro-box-boxed">
	<div class="container">
		<div class="sd-intro-box-content clearfix <?php if ( $sd_data['intro_box_type'] == 'boxed' && $sd_data['home_slider'] == 1 ) echo 'box-margin'; ?>"> <?php echo do_shortcode( $sd_data['intro_box_content'] ); ?> </div>
	</div>
</div>
<?php endif; ?>
</div>
<?php endif; ?>

<?php if ( is_front_page() && $sd_data['intro_box'] == 1 && $sd_data['intro_box_type'] == 'full' ) : ?>
<div class="sd-intro-box">
	<div class="container">
		<div class="sd-intro-box-content clearfix"> <?php echo do_shortcode( $sd_data['intro_box_content'] ); ?> </div>
	</div>
</div>
<?php endif; ?>

<?php if ( !is_front_page() ) : ?>
<?php get_template_part( 'framework/inc/page-top' ); ?>
<?php endif; ?>