<?php

function jetfuel_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','jetfuel_setup');

function jetfuel_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'jetfuel_add_woocommerce_support' );

// register navbars
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'jetfuel' ),
) );

function jetfuel_scripts() {
    /* Stylesheets */
    wp_enqueue_style( 'header-font', "https://fonts.googleapis.com/css?family=Permanent+Marker" );
    wp_enqueue_style( 'copy-font', "https://fonts.googleapis.com/css?family=Varela" );
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'nav-style', get_template_directory_uri() . '/css/nav-style.css' );
    wp_enqueue_style('loading-style', get_template_directory_uri() . '/css/spinning.css');
    wp_enqueue_style('case-study-style', get_template_directory_uri() . '/css/case-study.css');
    wp_enqueue_style('project-style', get_template_directory_uri() . '/style.css');
    /* Scripts */
    wp_enqueue_script( 'nav-script', get_template_directory_uri() . '/js/jetfuel.js', true );
}

add_action('wp_enqueue_scripts','jetfuel_scripts');

function custom_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );


// excerpt length control

function custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 80 );


?>