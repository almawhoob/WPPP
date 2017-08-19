<?php

/*  Creates a new post type 'wppp_project' (Projects) 
 *  @link http://codex.wordpress.org/Function_Reference/register_post_type
 *  TODO: apply custom messages when project is edited, updated, deleted 
 */
function wppp_project_custom_post_type() {

    $labels = [
        'name'               => _x('Projects', 'Post Type General Name', 'gourmet-artist'),
        'singular_name'      => _x('Project', 'Post Type Singular Name', 'gourmet-artist'),
        'menu_name'          => __('Projects', 'gourmet-artist'),
        'all_items'          => __('All Projects', 'gourmet-artist'),
        'view_items'         => __('View projects', 'gourmet-artist'),
        'add_new_item'       => __('Add New Project', 'gourmet-artist'),
        'add_new'            => __('Add New Project', 'gourmet-artist'),
        'edit_item'          => __('Edit Project', 'gourmet-artist'),
        'update_item'        => __('Update Project', 'gourmet-artist'),
        'search_items'       => __('Search Projects', 'gourmet-artist'),
        'not_found'          => __('No projects found.', 'gourmet-artist'),
        'not_found_in_trash' => __('No projects found in trash.', 'gourmet-artist'),
    ];
    
    $args = [
        'labels'                => $labels,
        'public'                => true,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail' ),
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'rewrite'               => ['slug' => 'projects'], //my custom slug
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true, 
        'menu_position'         => 5, //menu order; show_in_menu must be true; 5 means below Posts
        'menu_icon'             => 'dashicons-smiley', //uses an icon from Dashicons
        'can_export'            => true,
    ];
    register_post_type( 'wppp_project', $args );
}
add_action('init', 'wppp_project_custom_post_type');
