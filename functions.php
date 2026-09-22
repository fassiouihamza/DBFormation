<?php
/**
 * IDB Formation Theme Functions
 */

function idbformation_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap', array(), null );
    
    // Main Stylesheet
    wp_enqueue_style( 'idbformation-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
    
    // Phosphor Icons
    wp_enqueue_script( 'phosphor-icons', 'https://unpkg.com/@phosphor-icons/web', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'idbformation_enqueue_scripts' );

function idbformation_theme_support() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    
    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );
    
    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
    
    // Register Navigation Menu
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'idbformation' ),
    ) );
}
add_action( 'after_setup_theme', 'idbformation_theme_support' );
