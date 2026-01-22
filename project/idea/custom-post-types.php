<?php
add_action('init', function() {
    register_post_type('portfolio', [
        'label' => 'Portfolio',
        'public' => true,
        'supports' => ['title', 'editor','thumbnail'],
        'has_archive' => true,
    ]);
});

?>