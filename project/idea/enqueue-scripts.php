<?php

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('dropdown-js', get_template_directory_uri() . '/js/dropdown.js', [], false, true);
});

?>