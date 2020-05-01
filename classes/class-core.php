<?php
/**
 * Class Core
 *
 * @package   centro_axis\classes
 * @author    Centro Axis
 * @license   GPL-2.0+
 * @link
 * @copyright 2020 Centro Axis
 */

namespace centro_axis\classes;

/**
 * Class Core
 *
 * @package centro_axis\classes
 */
class Core {

	/**
	 * Holds class instance
	 *
	 * @since 1.0.0
	 *
	 * @var      object centro_axis\classes\Core()
	 */
	protected static $instance = null;

	/**
	 * Setup
	 *
	 * @var object centro_axis\classes\Setup();
	 */
	public $setup;

	/**
	 * Admin
	 *
	 * @var object centro_axis\classes\Admin();
	 */
	public $admin;

	/**
	 * FrontEnd
	 *
	 * @var object centro_axis\classes\Frontend();
	 */
	public $frontend;

	/**
	 * Search
	 *
	 * @var object centro_axis\classes\Search();
	 */
	public $search;

	/**
	 * Initialize the plugin by setting localization, filters, and administration functions.
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function __construct() {
		require_once get_stylesheet_directory() . '/classes/class-setup.php';
		$this->setup = Setup::get_instance();

		require_once get_stylesheet_directory() . '/classes/class-admin.php';
		$this->admin = Admin::get_instance();

		require_once get_stylesheet_directory() . '/classes/class-frontend.php';
		$this->frontend = Frontend::get_instance();
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since 1.0.0
	 *
	 * @return    object centro_axis\classes\Core()    A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;

	}
}
