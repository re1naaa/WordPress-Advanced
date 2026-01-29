<?php
/**
 * WP_Query Helper Functions
 *
 * Demonstrates proper WP_Query usage for custom queries
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

/**
 * Get featured posts using WP_Query
 *
 * @param int $number Number of posts to retrieve
 * @return array Array of post objects
 */
function blog_cms_pro_get_featured_posts($number = 3) {
    $args = array(
        'posts_per_page' => $number,
        'post_type'      => 'post',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'meta_query'     => array(
            array(
                'key'   => '_featured',
                'value' => '1',
            ),
        ),
    );

    $query = new WP_Query($args);
    return $query;
}

/**
 * Get portfolio items using WP_Query
 *
 * @param int $number Number of items to retrieve
 * @param string $project_type Filter by project type
 * @return WP_Query
 */
function blog_cms_pro_get_portfolio_items($number = 6, $project_type = '') {
    $args = array(
        'posts_per_page' => $number,
        'post_type'      => 'portfolio',
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    if (!empty($project_type)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'project_type',
                'field'    => 'slug',
                'terms'    => $project_type,
            ),
        );
    }

    return new WP_Query($args);
}

/**
 * Get posts by category using WP_Query
 *
 * @param string $category_slug Category slug
 * @param int $number Number of posts
 * @return WP_Query
 */
function blog_cms_pro_get_posts_by_category($category_slug, $number = 5) {
    $args = array(
        'posts_per_page' => $number,
        'post_type'      => 'post',
        'category_name'  => $category_slug,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    return new WP_Query($args);
}

/**
 * Get related posts using WP_Query
 *
 * @param int $post_id Post ID
 * @param int $number Number of posts
 * @return WP_Query
 */
function blog_cms_pro_get_related_posts($post_id, $number = 3) {
    $post_categories = get_the_category($post_id);
    $category_ids = wp_list_pluck($post_categories, 'term_id');

    $args = array(
        'posts_per_page' => $number,
        'post_type'      => 'post',
        'post__not_in'   => array($post_id),
        'category__in'   => $category_ids,
        'orderby'        => 'rand',
    );

    return new WP_Query($args);
}
