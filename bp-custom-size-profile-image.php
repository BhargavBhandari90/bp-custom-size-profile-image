<?php
/**
 * Plugin Name:     BuddyPress Custom Size Profile Image
 * Plugin URI:      https://bhargavb.wordpress.com/
 * Description:     Generate custom BuddyPress user profile image size
 * Author:          Bunty
 * Author URI:      https://bhargavb.wordpress.com/about/
 * Text Domain:     bp-custom-size-profile-image
 * Domain Path:     /languages
 * Version:         0.1.0
 */

/**
 * Main file, contains the plugin metadata and activation processes
 *
 * @package    Bp_Custom_Size_Profile_Image
 */
if ( ! defined( 'BPCPIS_VERSION' ) ) {
	/**
	 * The version of the plugin.
	 */
	define( 'BPCPIS_VERSION', '1.0.0' );
}
if ( ! defined( 'BPCPIS_PATH' ) ) {
	/**
	 *  The server file system path to the plugin directory.
	 */
	define( 'BPCPIS_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'BPCPIS_URL' ) ) {
	/**
	 * The url to the plugin directory.
	 */
	define( 'BPCPIS_URL', plugin_dir_url( __FILE__ ) );
}
if ( ! defined( 'BPCPIS_BASE_NAME' ) ) {
	/**
	 * The url to the plugin directory.
	 */
	define( 'BPCPIS_BASE_NAME', plugin_basename( __FILE__ ) );
}
/**
 * Display admin notice if BuddyPress is not activated.
 */
function bpcpis_admin_notice__error() {

	if ( function_exists( 'bp_is_active' ) ) {
		return;
	}

	// Notice class.
	$class = 'notice notice-error';

	// Get plugin name.
	$plugin_data = get_plugin_data( __FILE__ );
	$plugin_name = $plugin_data['Name'];

	// Display error if BuddyPress is not active.
	$message = sprintf(
		__( '%s works with BuddyPress only. Please activate BuddyPress or de-activate %s.', 'bp-custom-size-profile-image' ),
		esc_html( $plugin_name ),
		esc_html( $plugin_name )
	);

	printf(
		'<div class="%1$s"><p>%2$s</p></div>',
		esc_attr( $class ),
		esc_html( $message )
	);

}

add_action( 'admin_notices', 'bpCPIS_admin_notice__error' );

// Include admin functions file.
require BPCPIS_PATH . 'app/main/class-bp-custom-size-profile-image.php';
