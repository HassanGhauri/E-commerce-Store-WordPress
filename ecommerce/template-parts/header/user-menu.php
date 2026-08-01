<li class="user-menu">

    <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/user.png"
        alt="User"
        class="user-icon">

    <div class="user-dropdown">

        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('myaccount'))); ?>">
            Profile
        </a>

        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>">
            Store
        </a>

        <a href="<?php echo esc_url(home_url('/inventory/')); ?>">
            Inventory
        </a>

        <a href="<?php echo esc_url(wp_logout_url(home_url())); ?>">
            Logout
        </a>

    </div>

</li>