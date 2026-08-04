<?php

if (!defined('ABSPATH')) {
    exit;
}

class ECI_Loader
{
    public function __construct()
    {
        $this->includes();
    }

    private function includes()
    {
        /*
        |--------------------------------------------------------------------------
        | Shared Classes
        |--------------------------------------------------------------------------
        */

        require_once ECI_PLUGIN_PATH . 'includes/functions.php';
        require_once ECI_PLUGIN_PATH . 'includes/helpers.php';
        require_once ECI_PLUGIN_PATH . 'includes/class-products.php';
        require_once ECI_PLUGIN_PATH . 'includes/class-assets.php';
        require_once ECI_PLUGIN_PATH . 'includes/class-ajax.php';
        require_once ECI_PLUGIN_PATH . 'includes/class-permissions.php';

        /*
        |--------------------------------------------------------------------------
        | Frontend
        |--------------------------------------------------------------------------
        */

        require_once ECI_PLUGIN_PATH . 'frontend/class-shortcodes.php';

        /*
        |--------------------------------------------------------------------------
        | Admin
        |--------------------------------------------------------------------------
        */

        require_once ECI_PLUGIN_PATH . 'admin/class-admin-menu.php';
        require_once ECI_PLUGIN_PATH . 'admin/class-admin-page.php';
        require_once ECI_PLUGIN_PATH . 'admin/class-admin-table.php';
        require_once ECI_PLUGIN_PATH . 'admin/class-stock-update.php';
    }
}