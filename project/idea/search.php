<?php
/**
 * The template for displaying search results pages
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

get_header();
?>

<header class="search-header">
    <h1 class="search-title">
        <?php
        /* translators: %s: search query. */
        printf(esc_html__('Search Results for: %s', 'blog-cms-pro'), '<span>' . get_search_query() . '</span>');
        ?>
    </h1>
</header><!-- .search-header -->

<?php
if (have_posts()) :
    get_template_part('loop');
    
    the_posts_pagination(array(
        'mid_size'           => 2,
        'prev_text'          => esc_html__('« Previous', 'blog-cms-pro'),
        'next_text'          => esc_html__('Next »', 'blog-cms-pro'),
        'screen_reader_text' => esc_html__('Search pagination', 'blog-cms-pro'),
    ));
else :
    ?>
    <article>
        <h2><?php esc_html_e('Nothing Found', 'blog-cms-pro'); ?></h2>
        <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'blog-cms-pro'); ?></p>
        <?php get_search_form(); ?>
    </article>
    <?php
endif;
?>

<?php get_footer(); ?>