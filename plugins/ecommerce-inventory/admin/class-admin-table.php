<?php

if (!defined('ABSPATH')) {
    exit;
}

class ECI_Admin_Table
{
    public function render()
    {
        $products = (new ECI_Products())->get_products();

        include ECI_PLUGIN_PATH . 'admin/views/inventory-table.php';
    }
}