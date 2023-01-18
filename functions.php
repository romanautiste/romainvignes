<?php

function add_style() {
  wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', false);
  wp_enqueue_script('scrollama', get_template_directory_uri() . '/js/scrollama.js', false, 1, true);
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', false, 1, true);
  wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false);
  wp_enqueue_script('header-script', get_template_directory_uri() . '/js/script.js', ['scrollama', 'swiper'], 1, true);
}
add_action( 'wp_enqueue_scripts', 'add_style' );

function custom_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => 'Menu principal',
    ) );
}
add_action( 'after_setup_theme', 'custom_register_nav_menu', 0 );


function my_excerpt_length($length){ return 20; }
add_filter('excerpt_length', 'my_excerpt_length');
?>