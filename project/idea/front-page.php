<?php
/**
 * The template for displaying the front page
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

get_header();
?>

<section class="hero">
    <div class="hero-content">
        <h1><?php esc_html_e('Welcome to Blog + CMS Pro', 'blog-cms-pro'); ?></h1>
        <p><?php esc_html_e('A professional WordPress theme for your blog and content management', 'blog-cms-pro'); ?></p>
    </div>
</section>

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