<?php
/**
 * Register Navigation Menus
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

add_action('init', function() {
    register_nav_menus(array(
        'header_menu' => esc_html__('Header Menu', 'blog-cms-pro'),
        'footer_menu' => esc_html__('Footer Menu', 'blog-cms-pro'),
    ));
});