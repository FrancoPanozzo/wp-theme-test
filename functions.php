<?php

// Add dynamic title tag support in the content manager UI from WP CMS
function add_all_theme_supports(){
add_theme_support('title-tag');
}

add_action('after_setup_theme', 'add_all_theme_supports');


// Enqueue style tags
function registerStyles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('main-stylesheet', get_template_directory_uri() . './style.css', array('bootstrap-css-cdn'), $version, 'all');
    wp_enqueue_style('fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0','all');
    wp_enqueue_style('bootstrap-css-cdn', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1','all');
}

add_action('wp_enqueue_scripts', 'registerStyles');

// Enqueue javascript tags
function registerScripts(){
    wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('popper-cdn', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0',  true);
    wp_enqueue_script('bootstrap-js-cdn', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '1.16.0',  true);
    wp_enqueue_script('main-javascript', get_template_directory_uri() . './js/main.js', array(), '1.0', true);
    
}

add_action('wp_enqueue_scripts', 'registerScripts');

?>