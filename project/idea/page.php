<?php
/**
 * The template for displaying pages
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

get_header();
?>

<?php
while (have_posts()) :
    the_post();
    get_template_part('parts/content', 'page');
    
    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
endwhile; // End of the loop.
?>

<?php get_footer(); ?>