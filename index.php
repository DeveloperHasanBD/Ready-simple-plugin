<?php

/**
 * Plugin Name:       Redapple
 * Plugin URI:        https://www.red-apple.it/
 * Description:       redapple
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Red Apple International
 * Author URI:        https://www.red-apple.it/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       redapple
 * Domain Path:       /languages
 */

define('RAPPLE_TEMPLATE_PATH', plugin_dir_path(__FILE__));

// Assets link enqueue 
require_once(RAPPLE_TEMPLATE_PATH . 'public/enqueue.php');

// functionality 
require_once(RAPPLE_TEMPLATE_PATH . 'public/admin/functionality/ajax-data-processing.php');
require_once(RAPPLE_TEMPLATE_PATH . 'public/admin/admin-menu/admin-menu.php');

