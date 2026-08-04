<?php

if (!defined('ABSPATH')) {
    exit;
}

function eci_inventory_shortcode()
{
    if (!is_user_logged_in()) {
        return '<h2>Please login to access inventory.</h2>';
    }

    if (!current_user_can('manage_woocommerce')) {
        return '<h2>You do not have permission to access this page.</h2>';
    }

    ob_start();

    include ECI_PLUGIN_PATH . 'templates/inventory-page.php';

    return ob_get_clean();
}