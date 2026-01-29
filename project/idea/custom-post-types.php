<?php
/**
 * Register Custom Post Types
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

add_action('init', function() {
    register_post_type('portfolio', array(
        'label'               => esc_html__('Portfolio', 'blog-cms-pro'),
        'singular_name'       => esc_html__('Portfolio Item', 'blog-cms-pro'),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-art',
        'rewrite'             => array('slug' => 'portfolio'),
        'show_in_rest'        => true,
    ));
});