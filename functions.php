<?php

function style_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/stylesheet.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customscript', get_template_directory_uri() . '/js/main.js' , array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'style_enqueue');