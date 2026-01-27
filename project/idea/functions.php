<?php

require __DIR__ . '/enqueue-scripts.php';
require __DIR__ . '/theme-support.php';
require __DIR__ . '/menus.php';
require __DIR__ . '/widgets.php';
require __DIR__ . '/custom-post-types.php';
require __DIR__ . '/custom-taxonomies.php';

add_filter('body_class', function($classes) {
    $classes[] = 'my-custom-class';
    return $classes;
});

?>