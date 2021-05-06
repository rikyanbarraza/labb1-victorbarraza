<?php
 // Få fram CSS och JS med hjälp av php

 function min_css_och_js_funktion(){

     wp_enqueue_style( 'style', get_template_directory_uri(). '/assets/css/style.css') ;
     wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.css') ;
     wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.css') ;
     wp_enqueue_script( 'script', get_template_directory_uri(). '/assets/js/script.js') ;
     wp_enqueue_script( 'jquery', get_template_directory_uri(). '/assets/js/jquery.js') ;

}
add_action('wp_enqueue_scripts', 'min_css_och_js_funktion' );

add_theme_support('post-thumbnails');
add_theme_support('menus');

// function add_css(){

//     wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
//     wp_enqueue_style( 'style');
//     wp_register_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', false,'1.1','all');
//     wp_enqueue_style( 'font-awesome');
//     wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false,'1.1','all');
//     wp_enqueue_style( 'bootstrap');
// }

// add_action('wp_enqueue_scripts', 'add_css');

// function add_script(){

//    wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js');
//    wp_enqueue_script( 'script');
//    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js');
//    wp_enqueue_script( 'jquery');
// }

// add_action('wp_enqueue_scripts', 'add_script');


?>