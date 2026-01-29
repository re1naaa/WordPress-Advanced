<?php
/**
 * Blog + CMS Pro Theme Functions
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

// Include all theme modules
require __DIR__ . '/enqueue-scripts.php';
require __DIR__ . '/theme-support.php';
require __DIR__ . '/menus.php';
require __DIR__ . '/widgets.php';
require __DIR__ . '/custom-post-types.php';
require __DIR__ . '/custom-taxonomies.php';
require __DIR__ . '/inc/wp-query-helpers.php';

/**
 * Add custom body classes
 */
add_filter('body_class', function($classes) {
    $classes[] = 'blog-cms-pro';
    
    // Add class for no sidebar
    if (!is_active_sidebar('sidebar-main')) {
        $classes[] = 'no-sidebar';
    }
    
    return $classes;
});

/**
 * Load theme text domain for translations
 */
add_action('after_setup_theme', function() {
    load_theme_textdomain('blog-cms-pro', get_template_directory() . '/languages');
});