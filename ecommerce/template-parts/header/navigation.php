<nav class="main-navigation">

    <ul class="nav-menu">

        <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                Home
            </a>
        </li>

        <li>
            <a href="<?php echo esc_url(wc_get_checkout_url()); ?>">
                Checkout
            </a>
        </li>

        <li>
            <a href="<?php echo esc_url(home_url('/sample-page/')); ?>">
                Brochure
            </a>
        </li>

        <?php get_template_part('template-parts/header/user-menu'); ?>

        <li class="cart-menu">

            <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart-link">

                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping-cart.png"
                    alt="Cart"
                    class="cart-icon">

                <span class="cart-count">
                    <?php echo WC()->cart ? WC()->cart->get_cart_contents_count() : 0; ?>
                </span>

            </a>

        </li>

    </ul>

</nav>