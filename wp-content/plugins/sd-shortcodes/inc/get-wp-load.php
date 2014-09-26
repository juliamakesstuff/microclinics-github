<?php

$full_path = __FILE__;
$file_path = explode( 'wp-content', $full_path );
$load_wp_path = $file_path[0];

// Access WordPress
require_once( $load_wp_path . '/wp-load.php' );


?>