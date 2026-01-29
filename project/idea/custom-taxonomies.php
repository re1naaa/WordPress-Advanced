<?php
/**
 * Register Custom Taxonomies
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

add_action('init', function() {
    register_taxonomy('project_type', 'portfolio', array(
        'label'                 => esc_html__('Project Type', 'blog-cms-pro'),
        'singular_name'         => esc_html__('Project Type', 'blog-cms-pro'),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => true,
        'hierarchical'          => true,
        'rewrite'               => array('slug' => 'project-type'),
    ));
});