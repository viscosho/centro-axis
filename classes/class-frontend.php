<?php
/**
 * Class FrontEnd
 *
 * @package   centro_axis\classes
 * @author    Centro Axis
 * @license   GPL-2.0+
 * @link
 * @copyright 2020 Centro Axis
 */

namespace centro_axis\classes;

/**
 * Class Frontend
 *
 * @package centro_axis\classes
 */
class Frontend {

	/**
	 * Holds class instance
	 *
	 * @since 1.0.0
	 *
	 * @var      object centro_axis\classes\Frontend()
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
		add_action( 'after_setup_theme', array( $this, 'wyf_color_palette_setup' ), 100 );
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since 1.0.0
	 *
	 * @return    object \centro_axis\classes\Frontend()    A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Editor color palette.
	 *
	 * @return void
	 */
	public function wyf_color_palette_setup() {
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Blue', 'centro-axis' ),
				'slug'  => 'blue',
				'color' => '#28B7B4',
			),
			array(
				'name'  => esc_html__( 'Dark Blue', 'centro-axis' ),
				'slug'  => 'dark-blue',
				'color' => '#166362',
			),
			array(
				'name'  => esc_html__( 'Orange', 'centro-axis' ),
				'slug'  => 'orange',
				'color' => '#FAAB18',
			),
			array(
				'name'  => esc_html__( 'Dark Orange', 'centro-axis' ),
				'slug'  => 'dark-orange',
				'color' => '#EC9900',
			),
			array(
				'name'  => esc_html__( 'Purple', 'centro-axis' ),
				'slug'  => 'purple',
				'color' => '#814493',
			),
			array(
				'name'  => esc_html__( 'Dark Purple', 'centro-axis' ),
				'slug'  => 'dark-purple',
				'color' => '#44244d',
			),
			array(
				'name'  => esc_html__( 'Light grey', 'centro-axis' ),
				'slug'  => 'light-grey',
				'color' => '#F6F6F6',
			),
			array(
				'name'  => esc_html__( 'Dark Grey', 'centro-axis' ),
				'slug'  => 'dark-grey',
				'color' => '#222222',
			),
			array(
				'name'  => esc_html__( 'White', 'centro-axis' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			),
			array(
				'name'  => esc_html__( 'Black', 'centro-axis' ),
				'slug'  => 'black',
				'color' => '#000000',
			),
		));
	}
}
