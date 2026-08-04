<?php

if (!defined('ABSPATH')) {
    exit;
}

class ECI_Frontend_Table
{
    public function render()
    {
        $products = (new ECI_Products())->get_products();

        include ECI_PLUGIN_PATH . 'templates/inventory-table.php';
    }
}