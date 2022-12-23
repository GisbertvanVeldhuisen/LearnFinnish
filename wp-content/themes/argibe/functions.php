<?php

// Include styles
function child_enqueue_styles() {

    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array());
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles');

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

// Menu support
add_theme_support( 'menus' );

// Remove standard post type
function remove_default_post_type($args, $postType) {
    if ($postType === 'post') {
        $args['public']                = false;
        $args['show_ui']               = false;
        $args['show_in_menu']          = false;
        $args['show_in_admin_bar']     = false;
        $args['show_in_nav_menus']     = false;
        $args['can_export']            = false;
        $args['has_archive']           = false;
        $args['exclude_from_search']   = true;
        $args['publicly_queryable']    = false;
        $args['show_in_rest']          = false;
    }

    return $args;
}
add_filter('register_post_type_args', 'remove_default_post_type', 0, 2);

// Register Custom Post Type


// Options page ACF
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Header Settings',
        'menu_title'	=> 'Header Settings',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Footer Settings',
        'menu_title'	=> 'Footer Settings',
        'parent_slug'	=> 'theme-general-settings',
    ));
}
function create_faq_posttype() {
    register_post_type( 'faq',
        array(
            'labels' => array(
                'name' => __( 'faqs' ),
                'singular_name' => __( 'faq' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'faq'),
        )
    );
}
add_action( 'init', 'create_faq_posttype' );

function create_advanced_faq_posttype() {

    /**
     * Register a widgets post type.
     *
     * @link http://codex.wordpress.org/Function_Reference/register_post_type
     */

// Define the labels used inside the WordPress admin for this custom post type (CPT)
    $labels = array(
        'name'                => _x( 'Widgets', 'Post Type General Name', 'faqs' ),
        'singular_name'       => _x( 'Widgets', 'Post Type Singular Name', 'faq' ),
        'add_new'             => __( 'Add New', 'faq' ),
        'add_new_item'        => __( 'Add New Widget', 'faq' ),
        'edit_item'           => __( 'Edit Widget', 'faq' ),
        'new_item'            => __( 'New Widget' ),
        'all_items'           => __( 'All Widgets', 'faqs' ),
        'view_item'           => __( 'View Widget', 'faq' ),
        'search_items'        => __( 'Search Widget', 'faqs' ),
        'menu_name'           => __( 'Widgets', 'faqs' ),
        'parent_item_colon'   => __( 'Parent Widget', 'faqs' ),
        'update_item'         => __( 'Update Widget', 'faq' ),
        'not_found'           => __( 'Not Found', '404' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'faq' )
    );

// Define more options for the CPT

    $args = array(
        'label'               => $labels,
        'description'         => __( 'faq information and details', 'faq' ),
        'labels'              => $labels,
        // Define the allowed features in the post editor
        'supports'            => array( 'title', 'excerpt', 'thumbnail' ),
        // If hierarchical is true then the CPT behaves like a post. If false, it can have parent and child items like a page.
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        // menu_position defines where in the WP admin menu the CPT appears. 5 puts it right below posts. The higher the number to lower the CPT will be.
        'menu_position'       => 22,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    // Register this CPT
    register_post_type( 'faq', $args );

}

// hook into the init action and call create_advanced_posttype when it fires
add_action( 'init', 'create_advanced_faq_posttype', 0 );

function create_posttype() {
    register_post_type( 'reviews',
        array(
            'labels' => array(
                'name' => __( 'Reviews' ),
                'singular_name' => __( 'review' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'reviews'),
        )
    );
}
add_action( 'init', 'create_posttype' );

function create_advanced_posttype() {

    /**
     * Register a widgets post type.
     *
     * @link http://codex.wordpress.org/Function_Reference/register_post_type
     */

// Define the labels used inside the WordPress admin for this custom post type (CPT)
    $labels = array(
        'name'                => _x( 'Widgets', 'Post Type General Name', 'reviews' ),
        'singular_name'       => _x( 'Widgets', 'Post Type Singular Name', 'review' ),
        'add_new'             => __( 'Add New', 'review' ),
        'add_new_item'        => __( 'Add New Widget', 'review' ),
        'edit_item'           => __( 'Edit Widget', 'review' ),
        'new_item'            => __( 'New Widget' ),
        'all_items'           => __( 'All Widgets', 'reviews' ),
        'view_item'           => __( 'View Widget', 'review' ),
        'search_items'        => __( 'Search Widget', 'reviews' ),
        'menu_name'           => __( 'Widgets', 'reviews' ),
        'parent_item_colon'   => __( 'Parent Widget', 'reviews' ),
        'update_item'         => __( 'Update Widget', 'review' ),
        'not_found'           => __( 'Not Found', '404' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'review' )
    );

// Define more options for the CPT

    $args = array(
        'label'               => $labels,
        'description'         => __( 'Review information and details', 'review' ),
        'labels'              => $labels,
        // Define the allowed features in the post editor
        'supports'            => array( 'title', 'excerpt', 'thumbnail' ),
        // If hierarchical is true then the CPT behaves like a post. If false, it can have parent and child items like a page.
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        // menu_position defines where in the WP admin menu the CPT appears. 5 puts it right below posts. The higher the number to lower the CPT will be.
        'menu_position'       => 19,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    // Register this CPT
    register_post_type( 'reviews', $args );

}
// hook into the init action and call create_advanced_posttype when it fires
add_action( 'init', 'create_advanced_posttype', 0 );