<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        get_template_part('parts/content', get_post_format());
    endwhile;
else :
    echo '<p>No posts found.</p>';
endif;

?>