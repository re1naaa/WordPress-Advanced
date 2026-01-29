<?php
/**
 * Enqueue scripts and styles
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

add_action('wp_enqueue_scripts', function() {
    // Enqueue main stylesheet
    wp_enqueue_style(
        'blog-cms-pro-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );

    // Enqueue dropdown script (if exists)
    if (file_exists(get_template_directory() . '/js/dropdown.js')) {
        wp_enqueue_script(
            'blog-cms-pro-dropdown',
            get_template_directory_uri() . '/js/dropdown.js',
            array(),
            wp_get_theme()->get('Version'),
            true
        );
    }

    // Enqueue navigation script
    wp_enqueue_script(
        'blog-cms-pro-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Enqueue HTML5 shiv for older browsers
    wp_enqueue_script('html5', get_template_directory_uri() . '/js/html5.min.js');
    wp_script_add_data('html5', 'conditional', 'lt IE 9');

    // Load comment reply script on single posts
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
});