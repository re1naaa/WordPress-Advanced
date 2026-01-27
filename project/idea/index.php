<?php get_header(); ?>

<?php get_template_part('loop'); ?>

<?php
the_posts_pagination([
    'mid_size'  => 2,
    'prev_text' => __('« Prev'),
    'next_text' => __('Next »'),
]);
?>

<?php get_footer(); ?>