<?php
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function custom_scripts() {
    wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-style' , get_template_directory_uri() . '/src/css/bootstrap4/bootsrap.min.css' );
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/src/js/bootstrap4/bootstrap.min.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );
