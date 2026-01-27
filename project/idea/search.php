<?php get_header(); ?>

<h1>Search Results for: <?php echo get_search_query(); ?></h1>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('parts/content', 'search'); ?>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
<?php else : ?>
    <p>No results found.</p>
    <?php get_search_form(); ?>
<?php endif; ?>

<?php get_footer(); ?>