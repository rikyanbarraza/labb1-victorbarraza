<?php

function main() {
    wp_enqueue_style('main', get_template_directory_uri().'css/style.css');
}

add_action('wp_enqueue_scripts', 'main');