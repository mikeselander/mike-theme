<?php

/**
 * Theme Setup.
 *
 * Setup theme, menus, and widgets.
 *
 * @package	skeleton
 */

class ThemeSetup{

	/**
	 * Constructor function.
	 */
	public function __construct(){

		// Base Actions
		add_action( 'after_setup_theme', array( $this, 'otm_theme_setup' ) );
		add_action( 'init', array( $this, 'otm_register_menus' ) );

		// Register the theme max width
		if ( ! isset( $content_width ) ){
			$content_width = 1200;
		}

	}

	/**
	 * Setup default theme options.
	 */
	public function otm_theme_setup(){

		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array(
			'search-form',
			'gallery',
			'caption'
		) );

	}

	/**
	 * Register custom menus.
	 * Header Menu is only default defined menu. Add more as needed.
	 */
	public function otm_register_menus(){

		register_nav_menus( array(
			'header-menu'	=> __( 'Header Menu', 'mike-simple' ),
		) );

	}
}

// Run our class by default
$theme_setup = new ThemeSetup();
