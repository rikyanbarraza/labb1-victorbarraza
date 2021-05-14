<?php
 // Function för at få fram CSS och JS med hjälp av php

 function min_css_och_js_funktion(){
    
     wp_enqueue_style( 'main-bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.css');
     wp_enqueue_style( 'main-font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.css');
     wp_enqueue_style( 'mainstyle', get_template_directory_uri(). '/assets/css/style.css');
     wp_enqueue_script( 'jquery', get_template_directory_uri(). '/assets/js/jquery.js', false, false, true);
     wp_enqueue_script( 'script', get_template_directory_uri(). '/assets/js/script.js', false, false, true);

}
add_action('wp_enqueue_scripts', 'min_css_och_js_funktion');

// lägga till "utvald bild", menyer och widgets så det syns i wp editorn för sidor och inlägg 
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets')


?>