<?php

/*
 * Hooks for including styles, scripts, and fonts.
 *
 * @package: skeleton
 */

add_action( 'wp_enqueue_scripts', 'load_styles' );
add_action( 'init', 'editor_styles' );
add_filter( 'style_loader_tag', 'style_remove' );
add_action( 'wp_enqueue_scripts', 'load_styles' );
add_action( 'init', 'custom_jquery' );


/**
 * Build a Google Web Fonts link.
 *
 * Builds the correct Google fonts call from a simple string of required fonts.
 * Change based on your needs - Source+Sans+Pro is here only as an example.
 *
 * @return compiled font link
 */
function otm_google_web_fonts(){

	$fonts 		= "Open+Sans:400,700,400italic|Libre+Baskerville:400";

	$font_link	= '//fonts.googleapis.com/css?family=' . $fonts;
	$font_link	= str_replace( ',', '%2C', $font_link );
	$font_link .= '&subset=latin,latin-ext';

	return $font_link;

}


/**
 * Load any necessary stylesheets.
 *
 * We use a custom stylesheet so that we can keep the front-end script smaller
 * and more optimized and for better folder organization. The regular style.css
 * in the main directory only has required theme info.
 */
function load_styles(){

	// Main stylesheet & Google fonts call
	wp_register_style( 'style', get_template_directory_uri() . '/styles/main.css', array(), '', 'all' );
	wp_register_style( 'fonts', otm_google_web_fonts(), array(), '1', 'all' );

	// Enqueue everything
	wp_enqueue_style( 'style' );
	wp_enqueue_style( 'fonts' );

}


/**
 * Load backend editor styles.
 *
 * @see add_editor_style
 */
function editor_styles(){

	add_editor_style( get_template_directory_uri() . '/styles/editor-styles.css' );
    add_editor_style( otm_google_web_fonts() );

}


/**
 * Remove unnecessary 'text/css' from all enqueued stylesheets.
 *
 * @param	string Enqueued stylesheet
 * @return	string Cleaned style tag
 */
function style_remove( $tag ){

	return preg_replace( '~\s+type=["\'][^"\']++["\']~', '', $tag );

}

/**
 * Load a custom version of jQuery from the Google CDN Network & block the
 * existing version from loading. We do this because most people already have
 * the Google CND jQuery loaded so this speed up their render time with no
 * consequence to us.
 *
 * This will change once HTTP/2 is used.
 *
 * @see wp_deregister_script, wp_register_script, wp_enqueue_script
 */

function custom_jquery() {

	// Make sure we're ONLY running this script on the front-end. Will cause issues
	// in admin.
	if ( is_admin() || is_user_logged_in() ) {
		return;
	}

	wp_deregister_script( 'jquery' );

}
