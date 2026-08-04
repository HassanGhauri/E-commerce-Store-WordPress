<?php

if (!defined('ABSPATH')) {
    exit;
}

class ECI_Admin_Menu
{

    public function __construct()
    {
        add_action('admin_menu', [$this, 'register_menu']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_assets']);
    }

    /**
     * Register Admin Menu
     */
    public function register_menu()
    {

        add_menu_page(
            'Inventory',
            'Inventory',
            'manage_woocommerce',
            'eci-inventory',
            [$this, 'inventory_page'],
            'dashicons-products',
            56
        );

    }

    /**
     * Inventory Page
     */
    public function inventory_page()
    {
        include ECI_PLUGIN_PATH . 'admin/views/inventory.php';
    }

    /**
     * Load CSS & JS only on Inventory page
     */
    public function enqueue_assets($hook)
    {
        if ($hook !== 'toplevel_page_eci-inventory') {
            return;
        }

        wp_enqueue_style(
            'eci-admin-css',
            ECI_PLUGIN_URL . 'assets/css/admin.css',
            [],
            '1.0'
        );

        wp_enqueue_script(
            'eci-admin-js',
            ECI_PLUGIN_URL . 'assets/js/admin.js',
            ['jquery'],
            '1.0',
            true
        );
    }

}

new ECI_Admin_Menu();