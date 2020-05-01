<?php
/**
 * Class Admin
 *
 * @package   centro_axis\classes
 * @author    Centro Axis
 * @license   GPL-2.0+
 * @link
 * @copyright 2020 Centro Axis
 */

namespace centro_axis\classes;

/**
 * Class Admin
 *
 * @package centro_axis\classes
 */
class Admin {

	/**
	 * Holds class instance
	 *
	 * @since 1.0.0
	 *
	 * @var      object centro_axis\classes\Admin()
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
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since 1.0.0
	 *
	 * @return    object \centro_axis\classes\Admin()    A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}
