<nav class="main-navigation">

    <button class="menu-toggle">

        Primary Menu

    </button>

    <?php

    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_id' => 'primary-menu'
        )
    );

    ?>

</nav>