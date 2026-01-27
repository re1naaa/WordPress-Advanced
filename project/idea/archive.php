<?php get_header(); ?>

<h1><?php the_archive_title(); ?></h1>
<?php the_archive_description(); ?>

<?php get_template_part('loop'); ?>

<?php get_footer(); ?>