<?php

function registerStyles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('main-stylesheet', get_template_directory_uri() . './style.css', array('bootstrap-cdn'), $version, 'all');
    wp_enqueue_style('fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0','all');
    wp_enqueue_style('bootstrap-cdn', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1','all');
}

add_action('wp_enqueue_scripts', 'registerStyles');

?>