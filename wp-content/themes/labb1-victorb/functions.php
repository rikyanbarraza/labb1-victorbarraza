<?php
// Få fram CSS med hjälp av php
function main_files() {
    wp_enqueue_style('main_styles', get_template_directory_uri().'/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'main_files');

