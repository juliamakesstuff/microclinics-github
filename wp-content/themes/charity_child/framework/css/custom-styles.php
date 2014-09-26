<?php
/* ------------------------------------------------------------------------ */
/* Custom Theme Options Settings CSS										*/
/* ------------------------------------------------------------------------ */

$theme_accent = $sd_data['main_theme_color'];

?>

#header {
	height: <?php echo $sd_data['header_height']; ?>px;
}

.main-menu {
	margin-top: <?php echo $sd_data['header_height']/2-22.5; ?>px;
}
.site-title {
	margin-top: <?php echo $sd_data['logo_top_margin']; ?>px;
}


.sf-menu li a:hover,
.current-menu-item a,
.sf-menu li.sfHover a,
.sd-styled-title:before,
.sidebar-widget .sd-tab-titles {
	border-bottom: 2px solid <?php echo $theme_accent; ?>;
}
.sd-donate a,
.sf-menu li ul,
.sf-menu li li ul,
.sd-intro-box,
.post-rating,
.sd-newsletter,
.sd-pagination .current,
.sd-pagination .inactive:hover,
.sd-pagination .pagi-first:hover,
.sd-pagination .pagi-last:hover,
.sd-pagination .pagi-previous:hover,
.sd-pagination .pagi-next:hover,
.share-entry ul li.share-email a:hover,
.previous-article a:hover,
.next-article a:hover,
#footer .wpcf7-form input[type="submit"],
#footer .wpcf7-form input[type="submit"]:active,
#footer .wpcf7-form input[type="reset"]:active,
#footer .wpcf7-form input[type="button"]:active,
.sd-event-date-time i,
.sd-event-location i,
.sd-author-box {
	background-color: <?php echo $theme_accent; ?>;
}

a:hover,
.site-title a:hover,
.sd-donate-button,
.footer-sidebar-widget a:hover,
.copyright a:hover,
.entry-title a:hover,
.sidebar-widget a:hover,
.entry-meta ul li a:hover,
.sd-list-style li:before,
.comment-text cite a:hover {
	color: <?php echo $theme_accent; ?>;
}
.sd-fund-percent .skill,
.sidebar-widget .sd-tab-titles .ui-tabs-selected a,
.sidebar-widget .sd-tab-titles .ui-tabs-active a,
.sd-tab-titles .ui-tabs-selected a,
.sd-tab-titles .ui-tabs-active a,
.pricing-featured {
	background-color: <?php echo $theme_accent; ?> !important;
}

.respond-inputs input:focus,
.respond-textarea textarea:focus,
#footer .wpcf7-form input[type="text"]:focus,
#footer .wpcf7-form input[type="email"]:focus,
#footer .wpcf7-form textarea:focus,
.wpcf7-form input[type="text"]:focus,
.wpcf7-form input[type="email"]:focus,
.wpcf7-form textarea:focus {
	border: 1px solid <?php echo $theme_accent; ?>;
}
.tooltip-content {
	background: <?php echo $theme_accent; ?> !important;	
}

.tooltip-content:after,
.tooltip-content:before {
	border-top: 15px solid <?php echo $theme_accent; ?> !important;
}
.tooltip-content:before {
	border-top-color: <?php echo $theme_accent; ?> !important;
}
.toggle-title span:before,
.ui-accordion-header span:before {
	color: <?php echo $theme_accent; ?> !important;
}