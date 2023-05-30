<?php
/**
 * XerShade's Corner Theme Functions and Definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package XerShade's Corner
 * @since 1.0.0
 */

/**
 * Enqueue the css files the theme uses.
 */
if ( ! function_exists( 'xsc_enqueue_styles' ) ) {
	function xsc_enqueue_styles() {
		wp_enqueue_style( 'xsc-wordpress-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'xsc_enqueue_styles' );

/**
 * Setup the theme and register things with WordPress.
 */
if ( ! function_exists( 'xsc_theme_setup' ) ) {
	function xsc_theme_setup() {
		add_theme_support( 'wp-block-styles' );
	}
}
add_action( 'after_setup_theme', 'xsc_theme_setup' );
