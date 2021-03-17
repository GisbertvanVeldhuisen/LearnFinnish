<?php

// Include script
function my_theme_enqueue_styles() {

    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Admin CSS
function custom_admin_css() {
    wp_enqueue_style( 'custom_admin_css', get_template_directory_uri() . '/assets/admin.css', array(), filemtime( get_template_directory() . '/assets/admin.css' ) );
}
add_action( 'admin_enqueue_scripts', 'custom_admin_css', 10 );

// Register Custom Post Type
/*
* Creating a function to create our CPT
*/

function custom_post_type() {

    $labels = array(
        'name'                => _x( 'Websites', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'Website', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'Websites', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Website', 'twentytwenty' ),
        'all_items'           => __( 'All Websites', 'twentytwenty' ),
        'view_item'           => __( 'View', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Website', 'twentytwenty' ),
        'update_item'         => __( 'Update Website', 'twentytwenty' ),
        'search_items'        => __( 'Search Website', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );

    $args = array(
        'label'               => __( 'website', 'twentytwenty' ),
        'description'         => __( 'Website news and reviews', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'website', $args );

}
add_action( 'init', 'custom_post_type', 0 );

add_theme_support( 'menus' );
