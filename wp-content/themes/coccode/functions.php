<?php
add_theme_support( 'title-tag' );

// navigation
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menus( array(
	'Main menu' => 'Main menu',
) );
}

add_theme_support( 'post-thumbnails' );

/** images **/
add_image_size( 'largeHD', 1920, 1080, true ); // full screen
add_image_size( 'thumbnailHD', 800, 533, true ); // thumbnail


/*function custom_scripts() {
    wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-style' , get_template_directory_uri() . '/src/css/bootstrap4/bootsrap.min.css' );
    wp_enqueue_style( 'custom-style' , get_template_directory_uri() . '/assets/sass/style.css' );
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/src/js/bootstrap4/bootstrap.min.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );*/
