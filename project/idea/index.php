<?php
/**
 * The main template file
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

get_header();
?>

<?php get_template_part('loop'); ?>

<?php
the_posts_pagination(array(
    'mid_size'           => 2,
    'prev_text'          => esc_html__('« Previous', 'blog-cms-pro'),
    'next_text'          => esc_html__('Next »', 'blog-cms-pro'),
    'screen_reader_text' => esc_html__('Posts pagination', 'blog-cms-pro'),
));
?>

<?php get_footer(); ?>