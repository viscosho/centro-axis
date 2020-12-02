<?php
/**
 * Class FrontEnd
 *
 * @package   tina_martina\classes
 * @author    Tina Martina
 * @license   GPL-2.0+
 * @link
 * @copyright 2020 Tina Martina
 */

namespace tina_martina\classes;

/**
 * Class Frontend
 *
 * @package tina_martina\classes
 */
class Frontend {

	/**
	 * Holds class instance
	 *
	 * @since 1.0.0
	 *
	 * @var      object tina_martina\classes\Frontend()
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
	 * @return    object \tina_martina\classes\Frontend()    A single instance of this class.
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
				'name'  => esc_html__( 'Blue', 'tina-martina' ),
				'slug'  => 'blue',
				'color' => '#5cc6d0',
			),
			array(
				'name'  => esc_html__( 'Dark Blue', 'tina-martina' ),
				'slug'  => 'dark-blue',
				'color' => '#166362',
			),
			array(
				'name'  => esc_html__( 'Orange', 'tina-martina' ),
				'slug'  => 'orange',
				'color' => '#FAAB18',
			),
			array(
				'name'  => esc_html__( 'Dark Orange', 'tina-martina' ),
				'slug'  => 'dark-orange',
				'color' => '#EC9900',
			),
			array(
				'name'  => esc_html__( 'Purple', 'tina-martina' ),
				'slug'  => 'purple',
				'color' => '#ef5a91',
			),
			array(
				'name'  => esc_html__( 'Dark Purple', 'tina-martina' ),
				'slug'  => 'dark-purple',
				'color' => '#E05A8C',
			),
			array(
				'name'  => esc_html__( 'Light grey', 'tina-martina' ),
				'slug'  => 'light-grey',
				'color' => '#F6F6F6',
			),
			array(
				'name'  => esc_html__( 'Dark Grey', 'tina-martina' ),
				'slug'  => 'dark-grey',
				'color' => '#727376',
			),
			array(
				'name'  => esc_html__( 'White', 'tina-martina' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			),
			array(
				'name'  => esc_html__( 'Black', 'tina-martina' ),
				'slug'  => 'black',
				'color' => '#000000',
			),
		));
	}
}
