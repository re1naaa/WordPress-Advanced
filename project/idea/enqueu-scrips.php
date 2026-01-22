<?php

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', [], false, true);
});

?>