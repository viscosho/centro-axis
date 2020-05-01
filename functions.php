<?php
/**
 * Centro Axis Child functions
 *
 * @package centro-axis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 *
 * @return void
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );

}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

/**
 * Get the theme data
 *
 * @return void
 */
function theme_enqueue_styles() {

	$the_theme = wp_get_theme();
	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**
 * Child Text Domain
 *
 * @return void
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'centro-axis', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
