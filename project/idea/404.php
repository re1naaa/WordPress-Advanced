<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

get_header();
?>

<div class="page-404">
    <h1><?php esc_html_e('Page Not Found', 'blog-cms-pro'); ?></h1>
    <p><?php esc_html_e('Sorry, the page you are looking for does not exist.', 'blog-cms-pro'); ?></p>
    <p><?php esc_html_e('Try searching:', 'blog-cms-pro'); ?></p>
    <?php get_search_form(); ?>
    <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Return to home', 'blog-cms-pro'); ?></a></p>
</div>

<?php
get_footer();
?>