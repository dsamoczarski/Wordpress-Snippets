<ul>
    <?php
    wp_nav_menu(
        array(
            'items_wrap' => '%3$s',
            'container' => false,
            'menu_class' => '',
            'theme_location' => 'header-menu',
            'fallback_cb' => false
        )
    );
    ?>
</ul>