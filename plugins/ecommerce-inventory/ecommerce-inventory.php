<?php
/**
 * Plugin Name: Ecommerce Inventory
 * Plugin URI: https://example.com
 * Description: Inventory management plugin for WooCommerce.
 * Version: 1.0.0
 * Author: Muhammad Hassan Ghauri
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ECI_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('ECI_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once ECI_PLUGIN_PATH . 'includes/class-loader.php';

new ECI_Loader();
function eci_enqueue_inventory_assets()
{
    if (is_page('inventory')) {

        wp_enqueue_style(
            'eci-inventory',
            ECI_PLUGIN_URL . 'assets/css/inventory.css',
            array(),
            '1.0.0'
        );
    }
}

add_action('wp_enqueue_scripts', 'eci_enqueue_inventory_assets');
add_shortcode('inventory_table', 'eci_inventory_shortcode');