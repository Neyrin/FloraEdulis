<?php 
declare(strict_types=1);
add_action('init', function () {
    register_taxonomy('flavour', ['plant'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Flavour'),
            'edit_item' => __('Edit Flavour'),
            'name' => __('Flavours'),
            'search_items' => __('Search Flavours'),
            'singular_name' => __('Flavour'),
        ],
        'show_admin_column' => true,      
    ]);
});