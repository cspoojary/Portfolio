<?php
/**
 * Functions for Chaithanya Portfolio theme
 */

// Theme setup
function chaithanya_portfolio_setup() {
    // Add support for featured images
    add_theme_support( 'post-thumbnails' );
    
    // Add support for custom logo
    add_theme_support( 'custom-logo' );
    
    // Add support for title tag
    add_theme_support( 'title-tag' );
    
    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'chaithanya-portfolio' ),
    ) );
}
add_action( 'after_setup_theme', 'chaithanya_portfolio_setup' );

// Enqueue styles and scripts
function chaithanya_portfolio_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'chaithanya-portfolio-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'chaithanya_portfolio_scripts' );

// Add Theme Customizer Support
function chaithanya_portfolio_customize_register( $wp_customize ) {
    // Add Resume URL setting
    $wp_customize->add_setting( 'resume_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'resume_url', array(
        'label'       => __( 'Resume URL', 'chaithanya-portfolio' ),
        'section'     => 'title_tagline',
        'type'        => 'url',
    ) );

    // Add Social Links section
    $wp_customize->add_section( 'social_links', array(
        'title'       => __( 'Social Links', 'chaithanya-portfolio' ),
        'priority'    => 30,
    ) );

    // GitHub URL
    $wp_customize->add_setting( 'github_url', array(
        'default'           => 'https://github.com/cspoojary',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'github_url', array(
        'label'       => __( 'GitHub URL', 'chaithanya-portfolio' ),
        'section'     => 'social_links',
        'type'        => 'url',
    ) );

    // LinkedIn URL
    $wp_customize->add_setting( 'linkedin_url', array(
        'default'           => 'https://www.linkedin.com/in/chaithanya-s-poojary05/',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'linkedin_url', array(
        'label'       => __( 'LinkedIn URL', 'chaithanya-portfolio' ),
        'section'     => 'social_links',
        'type'        => 'url',
    ) );

    // Email URL
    $wp_customize->add_setting( 'email_url', array(
        'default'           => 'mailto:chaithanyaspoojary05@gmail.com',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'email_url', array(
        'label'       => __( 'Email Address', 'chaithanya-portfolio' ),
        'section'     => 'social_links',
        'type'        => 'text',
    ) );
}
add_action( 'customize_register', 'chaithanya_portfolio_customize_register' );

// Register Custom Post Types
function chaithanya_portfolio_register_post_types() {
    
    // Projects Post Type
    register_post_type( 'project', array(
        'labels'             => array(
            'name'               => _x( 'Projects', 'post type general name', 'chaithanya-portfolio' ),
            'singular_name'      => _x( 'Project', 'post type singular name', 'chaithanya-portfolio' ),
            'menu_name'          => _x( 'Projects', 'admin menu', 'chaithanya-portfolio' ),
            'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'chaithanya-portfolio' ),
            'add_new'            => _x( 'Add New', 'project', 'chaithanya-portfolio' ),
            'add_new_item'       => __( 'Add New Project', 'chaithanya-portfolio' ),
            'new_item'           => __( 'New Project', 'chaithanya-portfolio' ),
            'edit_item'          => __( 'Edit Project', 'chaithanya-portfolio' ),
            'view_item'          => __( 'View Project', 'chaithanya-portfolio' ),
            'all_items'          => __( 'All Projects', 'chaithanya-portfolio' ),
            'search_items'       => __( 'Search Projects', 'chaithanya-portfolio' ),
            'parent_item_colon'  => __( 'Parent Projects:', 'chaithanya-portfolio' ),
            'not_found'          => __( 'No projects found.', 'chaithanya-portfolio' ),
            'not_found_in_trash' => __( 'No projects found in Trash.', 'chaithanya-portfolio' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    ) );

    // Certifications Post Type
    register_post_type( 'certification', array(
        'labels'             => array(
            'name'               => _x( 'Certifications', 'post type general name', 'chaithanya-portfolio' ),
            'singular_name'      => _x( 'Certification', 'post type singular name', 'chaithanya-portfolio' ),
            'menu_name'          => _x( 'Certifications', 'admin menu', 'chaithanya-portfolio' ),
            'name_admin_bar'     => _x( 'Certification', 'add new on admin bar', 'chaithanya-portfolio' ),
            'add_new'            => _x( 'Add New', 'certification', 'chaithanya-portfolio' ),
            'add_new_item'       => __( 'Add New Certification', 'chaithanya-portfolio' ),
            'new_item'           => __( 'New Certification', 'chaithanya-portfolio' ),
            'edit_item'          => __( 'Edit Certification', 'chaithanya-portfolio' ),
            'view_item'          => __( 'View Certification', 'chaithanya-portfolio' ),
            'all_items'          => __( 'All Certifications', 'chaithanya-portfolio' ),
            'search_items'       => __( 'Search Certifications', 'chaithanya-portfolio' ),
            'parent_item_colon'  => __( 'Parent Certifications:', 'chaithanya-portfolio' ),
            'not_found'          => __( 'No certifications found.', 'chaithanya-portfolio' ),
            'not_found_in_trash' => __( 'No certifications found in Trash.', 'chaithanya-portfolio' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'certification' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    ) );

    // Experience Post Type
    register_post_type( 'experience', array(
        'labels'             => array(
            'name'               => _x( 'Experience', 'post type general name', 'chaithanya-portfolio' ),
            'singular_name'      => _x( 'Experience', 'post type singular name', 'chaithanya-portfolio' ),
            'menu_name'          => _x( 'Experience', 'admin menu', 'chaithanya-portfolio' ),
            'name_admin_bar'     => _x( 'Experience', 'add new on admin bar', 'chaithanya-portfolio' ),
            'add_new'            => _x( 'Add New', 'experience', 'chaithanya-portfolio' ),
            'add_new_item'       => __( 'Add New Experience', 'chaithanya-portfolio' ),
            'new_item'           => __( 'New Experience', 'chaithanya-portfolio' ),
            'edit_item'          => __( 'Edit Experience', 'chaithanya-portfolio' ),
            'view_item'          => __( 'View Experience', 'chaithanya-portfolio' ),
            'all_items'          => __( 'All Experience', 'chaithanya-portfolio' ),
            'search_items'       => __( 'Search Experience', 'chaithanya-portfolio' ),
            'parent_item_colon'  => __( 'Parent Experience:', 'chaithanya-portfolio' ),
            'not_found'          => __( 'No experience found.', 'chaithanya-portfolio' ),
            'not_found_in_trash' => __( 'No experience found in Trash.', 'chaithanya-portfolio' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'experience' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'supports'           => array( 'title', 'editor' ),
    ) );
}
add_action( 'init', 'chaithanya_portfolio_register_post_types' );
