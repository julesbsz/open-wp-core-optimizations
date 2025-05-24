<?php
/*
 * Plugin Name: Open WP Core Optimizations
 * Description: Disable unnecessary WordPress core features to improve performance.
 * Version: 1.0
 * Author: Jules Bousrez
 * Author URI: https://julesbousrez.fr/
 * Text Domain: open-wp-core-optimizations
 */

defined('ABSPATH') || exit;

// Load options
$options = get_option('ocwp_options', []);

// Load modules conditionally
foreach (glob(plugin_dir_path(__FILE__) . 'includes/*.php') as $file) {
    include_once $file;
}

// Admin settings page
if (is_admin()) {
    include_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
}