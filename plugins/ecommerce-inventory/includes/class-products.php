<?php

if (!defined('ABSPATH')) {
    exit;
}

class ECI_Products
{
    /**
     * Get all WooCommerce products
     */
    public function get_products()
    {
        return wc_get_products(array(
            'limit'  => -1,
            'status' => 'publish'
        ));
    }
}