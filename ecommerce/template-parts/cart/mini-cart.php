<div class="mini-cart-overlay"></div>

<aside id="mini-cart" class="mini-cart">

    <div class="mini-cart-header">

        <div class="mini-cart-title">

            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart.png"
                alt="Cart"
                class="mini-cart-icon">

            <h2>Your Cart</h2>

        </div>

        <button class="mini-cart-close" type="button">
            &times;
        </button>

    </div>

    <div class="mini-cart-content">

        <?php woocommerce_mini_cart(); ?>

    </div>

    <div class="mini-cart-footer">

        <a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="mini-cart-btn checkout-btn">
            Checkout
        </a>

    </div>

</aside>