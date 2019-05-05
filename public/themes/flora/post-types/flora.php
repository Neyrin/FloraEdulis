<?php 
declare(strict_types=1);

add_action('init', function () {
    register_post_type('plant', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Plant'),
            'edit_item' => __('Edit Plant'),
            'name' => __('Plants'),
            'search_items' => __('Search Plants'),
            'singular_name' => __('Plant'),
        ],
				'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ],
        'menu_icon' => 'dashicons-carrot',
        'menu_position' => 20,
        'public' => true,
    ]);
});