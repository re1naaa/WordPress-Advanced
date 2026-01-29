<?php
/**
 * The template for displaying single posts
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

get_header();
?>

<?php
while (have_posts()) :
    the_post();
    get_template_part('parts/content', 'single');
    
    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
    
    // Display post navigation
    the_post_navigation();
endwhile; // End of the loop.
?>

<?php get_footer(); ?>
