<?php

if (!defined('ABSPATH')) {
    exit;
}
?>

<table class="eci-table">

    <thead>

        <tr>
            <th>Image</th>
            <th>Product</th>
            <th>SKU</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Status</th>
        </tr>

    </thead>

    <tbody>

    <?php foreach ($products as $product) : ?>

        <tr>

            <td><?php echo $product->get_image([60,60]); ?></td>

            <td><?php echo esc_html($product->get_name()); ?></td>

            <td><?php echo esc_html($product->get_sku()); ?></td>

            <td><?php echo wp_kses_post($product->get_price_html()); ?></td>

            <td>

                <?php

                $stock = $product->get_stock_quantity();

                echo $stock === null ? '-' : esc_html($stock);

                ?>

            </td>

            <td>

                <?php

                switch ($product->get_stock_status()) {

                    case 'instock':
                        echo '<span class="stock instock">In Stock</span>';
                        break;

                    case 'outofstock':
                        echo '<span class="stock outofstock">Out of Stock</span>';
                        break;

                    case 'onbackorder':
                        echo '<span class="stock backorder">On Backorder</span>';
                        break;

                    default:
                        echo esc_html(ucfirst($product->get_stock_status()));
                }

                ?>

            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>