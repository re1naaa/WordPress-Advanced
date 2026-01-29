<?php
/**
 * Theme Support and Features
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

add_action('after_setup_theme', function() {
    // Add support for title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(825, 510, true);
    
    // Additional image sizes
    add_image_size('blog-medium', 600, 400, true);
    add_image_size('blog-small', 300, 200, true);

    // Add support for post formats
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for HTML5
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for customizer selective refresh
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
});