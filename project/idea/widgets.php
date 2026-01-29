<?php
/**
 * Register Widget Areas
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

add_action('widgets_init', function() {
    register_sidebar(array(
        'name'          => esc_html__('Main Sidebar', 'blog-cms-pro'),
        'id'            => 'sidebar-main',
        'description'   => esc_html__('Primary sidebar for displaying widgets', 'blog-cms-pro'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
});