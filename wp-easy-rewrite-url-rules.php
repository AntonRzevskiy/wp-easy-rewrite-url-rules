<?php
/**
 * Plugin Name: WP Easy Rewrite Url Rules
 * Description: A WordPress plugin for rewrite url's.
 * Plugin URI: 
 * Author: Anton Rzhevskiy
 * Author URI: https://github.com/AntonRzevskiy
 * Version: 0.0.1
 * License: MIT License
 *
 * @package WP_Easy_Rewrite_Url_Rules
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WP_EASY_REWRITE_URL_RULES', '0.0.1' );
define( 'WP_EASY_REWRITE_URL_RULES_FILE', __FILE__ );
define( 'WP_EASY_REWRITE_URL_RULES_PATH', plugin_dir_path( WP_EASY_REWRITE_URL_RULES_FILE ) );
define( 'WP_EASY_REWRITE_URL_RULES_URL', plugin_dir_url( WP_EASY_REWRITE_URL_RULES_FILE ) );

register_activation_hook( WP_EASY_REWRITE_URL_RULES_FILE, array( 'WP_Easy_Rewrite_Url_Rules', 'activate' ) );
register_deactivation_hook( WP_EASY_REWRITE_URL_RULES_FILE, array( 'WP_Easy_Rewrite_Url_Rules', 'deactivate' ) );

/**
 * Class WP_Easy_Rewrite_Url_Rules
 */
final class WP_Easy_Rewrite_Url_Rules {

	/**
	 * Plugin instance.
	 *
	 * @var WP_Easy_Rewrite_Url_Rules
	 * @access private
	 */
	private static $instance = null;

	/**
	 * Get plugin instance.
	 *
	 * @return WP_Easy_Rewrite_Url_Rules
	 * @static
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 *
	 * @access private
	 */
	private function __construct() {
		$this->includes();

		add_action( 'plugins_loaded', array( $this, 'init' ) );
	}

	/**
	 * Load plugin function files here.
	 */
	public function includes() {
	}

	/**
	 * Code you want to run when all other plugins loaded.
	 */
	public function init() {
	}

	/**
	 * Run when activate plugin.
	 */
	public static function activate() {
	}

	/**
	 * Run when deactivate plugin.
	 */
	public static function deactivate() {
	}
}

function wp_easy_rewrite_url_rules() {
	return WP_Easy_Rewrite_Url_Rules::get_instance();
}

$GLOBALS[ 'wp_easy_rewrite_url_rules' ] = wp_easy_rewrite_url_rules();
