<?php
add_action('init', function() {
    register_taxonomy('project_type', 'portfolio', [
        'label' => 'Project Type',
        'hierarchical' => true,
    ]);
});

?>