<?php
add_action('widgets_init', function() {
    register_sidebar([
        'name' => 'Main Sidebar',
        'id'   => 'sidebar-main',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
    ]);
});

?>