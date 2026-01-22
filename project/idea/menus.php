<?php
add_action('init', function() {
    register_nav_menus([
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
    ]);
});

?>