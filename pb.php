<?php

/**
 * The plugin bootstrap file
 *
 *
 * @link              team
 * @since             1.0.0
 * @package           Pb
 *
 * @wordpress-plugin
 * Plugin Name:       Customer Management 
 * Plugin URI:        https://github.com/UPsite.top
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            upsite.top
 * Author URI:        team
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pb
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pb-activator.php
 */
function activate_pb() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pb-activator.php';
	Pb_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pb-deactivator.php
 */
function deactivate_pb() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pb-deactivator.php';
	Pb_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pb' );
register_deactivation_hook( __FILE__, 'deactivate_pb' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pb.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pb() {

	$plugin = new Pb();
	$plugin->run();

}
run_pb();
