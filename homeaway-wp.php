<?php
/*
 * Plugin Name: Homeaway WP
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: homeaway-wp
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-homeaway-wp.php' );
require_once( 'includes/class-homeaway-wp-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-homeaway-wp-admin-api.php' );
require_once( 'includes/lib/class-homeaway-wp-post-type.php' );
require_once( 'includes/lib/class-homeaway-wp-taxonomy.php' );

/**
 * Returns the main instance of Homeaway_WP to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Homeaway_WP
 */
function Homeaway_WP () {
	$instance = Homeaway_WP::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Homeaway_WP_Settings::instance( $instance );
	}

	return $instance;
}

Homeaway_WP();
