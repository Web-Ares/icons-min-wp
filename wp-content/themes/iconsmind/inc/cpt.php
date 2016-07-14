<?php
// Register Custom Post Type
add_action('init', 'custom_post_type', 0);

function custom_post_type()
{

    $labels = array(

        'name' => 'Authors',
        'singular_name' => 'Author',
        'menu_name' => 'Authors',
        'all_items' => 'All Authors',
        'view_item' => 'View Author',
        'add_new_item' => 'Add Author',
        'add_new' => 'Add Author',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'with_front' => true
        )
    );

    register_post_type('author', $args);

}
