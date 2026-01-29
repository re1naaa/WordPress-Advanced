<?php
/**
 * The loop template part
 *
 * @package Blog_Plus_CMS_Pro
 * @since 1.0
 */

if (have_posts()) :
    while (have_posts()) : 
        the_post();
        get_template_part('parts/content', get_post_format());
    endwhile;
else :
    ?>
    <article>
        <h2><?php esc_html_e('No posts found', 'blog-cms-pro'); ?></h2>
        <p><?php esc_html_e('No posts have been published yet.', 'blog-cms-pro'); ?></p>
    </article>
    <?php
endif;