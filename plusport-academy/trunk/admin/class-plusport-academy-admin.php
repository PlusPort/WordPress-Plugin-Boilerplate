<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://www.plusport.com
 * @since      1.0.0
 *
 * @package    PlusPort_Academy
 * @subpackage PlusPort_Academy/admin
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    PlusPort_Academy
 * @subpackage PlusPort_Academy/admin
 * @author     Your Name <email@example.com>
 */
class PlusPort_Academy_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @var      string    $plugin_name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in PlusPort_Academy_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The PlusPort_Academy_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plusport-academy-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in PlusPort_Academy_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The PlusPort_Academy_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plusport-academy-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register the PlusPort Academy Settings page in the Dashboard.
	 *
	 * This menu will be available under the general Settings menu.
	 *
	 * @since    1.0.0
	 */
	public function add_options_submenu() {

		/**
		 * This function is provided for demonstration purposes only.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . '/admin/partials/plusport-academy-admin-display.php';
		add_options_page('PlusPort Academy', 'PlusPort Academy', 'manage_options', 'pp_academy_options', 'print_options_page');
	}

}
