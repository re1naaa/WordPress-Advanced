
<?php get_header(); ?>
<section class="hero">
  <h1>Welcome to Blog+CMS Pro</h1>
</section>
<?php get_template_part('template-parts/loop'); ?>
<?php get_footer(); ?>
<body <?php body_class(); ?>>
<?php
add_filter('body_class', function($classes) {
    $classes[] = 'my-custom-class';
    return $classes;
});
?>