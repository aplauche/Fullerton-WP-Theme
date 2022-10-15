<?php
/**
 * This file adds functions to the Fullerton WordPress theme.
 *
 * @package Fullerton
 */

if ( ! function_exists( 'fullerton_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function fullerton_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'fullerton', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'fullerton_setup' );


include_once(get_stylesheet_directory( ) . '/functions/assets.php' );
include_once(get_stylesheet_directory( ) . '/functions/blocks.php' );
include_once(get_stylesheet_directory( ) . '/functions/patterns.php');

