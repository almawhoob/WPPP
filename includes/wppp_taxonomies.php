<?php

/**
 * Creates a Taxonomy for Item Categories. 
 */
function wppp_project_category_taxonomy() {

    $labels = [
        'name'              => _x('Project Categories', 'taxonomy general name'),
        'singular_name'     => _x('Project Categories', 'taxonomy singular name'),
        'search_items'      => __('Search Project Categories'),
        'all_items'         => __('All Categories'),
        'parent_item'       => __('Parent Project Category'),
        'parent_item_colon' => __('Parent Project Category:'),
        'edit_item'         => __('Edit Project Category'),
        'update_item'       => __('Update Project Category'),
        'add_new_item'      => __('Add New Project Category'),
        'new_item_name'     => __('New Project Category Name'),
        'menu_name'         => __('Categories'),
    ];

    $args = [
        'hierarchical'      => true, //make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'project_category'],
    ];
    register_taxonomy( 'project_category', ['wppp_project'], $args );
}
add_action( 'init', 'wppp_project_category_taxonomy' );



/**
 * Creates a Taxonomy for Item Tags. 
 */
function wppp_project_tag_taxonomy() {

    $labels = [
        'name'              => _x('Project Tags', 'taxonomy general name'),
        'singular_name'     => _x('Project Tags', 'taxonomy singular name'),
        'search_items'      => __('Search Project Tags'),
        'all_items'         => __('All Tags'),
        'parent_item'       => __('Parent Project Tag'),
        'parent_item_colon' => __('Parent Project Tag:'),
        'edit_item'         => __('Edit Project Tag'),
        'update_item'       => __('Update Project Tag'),
        'add_new_item'      => __('Add New Project Tag'),
        'new_item_name'     => __('New Project Tag Name'),
        'menu_name'         => __('Tags'),
    ];

    $args = [
        'hierarchical'      => false, //make it non-hierarchical (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'project_tag'],
    ];
    register_taxonomy( 'project_tag', ['wppp_project'], $args );
}
add_action( 'init', 'wppp_project_tag_taxonomy' );
