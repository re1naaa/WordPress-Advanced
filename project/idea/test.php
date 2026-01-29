<?php
/**
 * Simple template to test theme functionality
 *
 * @package Blog_Plus_CMS_Pro
 */

echo "<!-- Theme is loading -->";

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        echo "<h2>" . get_the_title() . "</h2>";
        echo the_content();
    }
} else {
    echo "<p>No posts available</p>";
}

get_footer();
