<?php
/**
 * Class Setup
 *
 * @package   centro_axis\classes
 * @author    Centro Axis
 * @license   GPL-2.0+
 * @link
 * @copyright 2020 Centro Axis
 */

namespace centro_axis\classes;

/**
 * Class Setup
 *
 * @package centro_axis\classes
 */
class Setup {

	/**
	 * Holds class instance
	 *
	 * @since 1.0.0
	 *
	 * @var      object centro_axis\classes\Setup()
	 */
	protected static $instance = null;

	/**
	 * Initialize the plugin by setting localization, filters, and administration functions.
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function __construct() {
		add_action( 'after_setup_theme', array( $this, 'language_setup' ), 11 );
		add_action( 'after_setup_theme', array( $this, 'axis_theme_support' ) );
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since 1.0.0
	 *
	 * @return    object \centro_axis\classes\Setup()    A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Load the text domain
	 *
	 * @return void
	 */
	public function language_setup() {
		load_child_theme_textdomain( 'centro-axis', get_stylesheet_directory() . '/languages' );
	}

	/**
	 * Add theme support for align wide
	 *
	 * @return void
	 */
	public function axis_theme_support() {
		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
		// Add support for styling blocks.
		add_theme_support( 'wp-block-styles' );
		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );
	}

}
