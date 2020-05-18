<?php
/**
 * Custom functions
 *
 * @package understrap
 */

 /**
 * Add site info content.
 */
function understrap_add_site_info() {
	$the_theme = wp_get_theme();
	$year      = date( 'Y' );
	$site_info = $the_theme->get( 'Name' ) . ' | ' . $year;

	echo apply_filters( 'understrap_site_info_content', $site_info ); // WPCS: XSS ok.
}
