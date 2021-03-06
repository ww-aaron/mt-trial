<?php
/**
 * Plugin Name: Aaron Speer - Modern Tribe Trial Backend Project
 * Description: Provides a front-end form for submitting websites URLs as a Custom Post Type.
 * Version: 1.0
 * Author: Aaron Speer
 * Text Domain: as-mt-trial
 * License: GPLv2 or later
 */

namespace Inc;

define( 'AS_MT_PLUGIN_DIR', plugin_dir_path(__FILE__) );
define( 'AS_MT_PLUGIN_URI', plugin_dir_url(__FILE__) );

// Include the autoloader.
include dirname( __FILE__ ) . '/inc/autoloader.php';

AS_Main::get_instance();

register_activation_hook( __FILE__, array( 'Inc\AS_Main', 'init' ) );
register_deactivation_hook( __FILE__, array( 'Inc\AS_Main', 'teardown' ) );
