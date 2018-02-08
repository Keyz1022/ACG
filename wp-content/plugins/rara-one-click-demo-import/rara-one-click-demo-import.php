<?php
/*
Plugin Name: RARA One Click Demo Import
Plugin URI: https://wordpress.org/plugins/rara-one-click-demo-import/
Description: Import demo content, widgets and settings of themes made by RaraTheme.com with just one click.
Version: 1.1.0
Author: raratheme
Author URI: https://www.raratheme.com
License: GPL3
License URI: http://www.gnu.org/licenses/gpl.html
Text Domain: rara-one-click-demo-import
*/

// Block direct access to the main plugin file.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

define( 'RRDI_PATH', plugin_dir_path( __FILE__ ) );

// Current version of the plugin.
define( 'RRDI_VERSION', '1.0.8' );

// Path/URL to root of this plugin, with trailing slash.
define( 'RRDI_URL', plugin_dir_url( __FILE__ ) );

require RRDI_PATH . 'includes/class-rrdi-init.php';

