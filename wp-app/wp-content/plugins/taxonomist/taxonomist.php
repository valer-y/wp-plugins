<?php
/*
Plugin Name: Taxonomist
Description: ###
Version: 1.0
Requires PHP: 7.4
Author: Me
Author URI: ###
License: GPLv2 or later
Text Domain: taxonomist
*/

defined('ABSPATH') || exit;

(! function_exists('add_acton'))?: exit;

define('TAXON__URL', plugin_dir_path(__FILE__));
define('TAXON__PLUGIN_DIR', plugin_dir_path(__FILE__) . 'inc/');

require_once (TAXON__PLUGIN_DIR . 'Taxonomist.php');

register_activation_hook(__FILE__, ['Taxonomist', 'activation']);
register_deactivation_hook(__FILE__, ['Taxonomist', 'deactivation']);

