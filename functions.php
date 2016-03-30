<?php

// Dependencies

require_once ('lib/config.general.php' );

require_once ('lib/default.php');
require_once ('lib/themewrangler.class.php');
require_once ('lib/slug.php' );
require_once ('lib/helpers.php' );

include_once ('lib/advanced-custom-fields-pro/acf.php' );
include_once ('lib/soil/soil.php' );
include_once ('lib/roots-rewrites-master/roots-rewrites.php' );
//include_once ('lib/opengraph/opengraph.php' );

// Includes

function my_acf_settings_path( $path ) {
  $path = get_stylesheet_directory() . '/lib/advanced-custom-fields-pro/';
  return $path;
}
add_filter('acf/settings/path', 'my_acf_settings_path');


function my_acf_settings_dir( $dir ) {
 $dir = get_stylesheet_directory_uri() . '/lib/advanced-custom-fields-pro/';
 return $dir;
}
add_filter('acf/settings/dir', 'my_acf_settings_dir');

add_theme_support('soil-relative-urls');
add_theme_support('soil-nice-search');
add_theme_support('soil-clean-up');
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-nav-walker');
//add_theme_support('soil-jquery-cdn');
//add_theme_support('soil-js-to-footer');
add_filter('show_admin_bar', '__return_false');

// Remove Stupid Emojis

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter('wp_head', 'wp_widget_recent_comments_style' );

// Theme Wrangler

include_once locate_template('/lib/tw_config.php' );

?>