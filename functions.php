<?php

function landing_styles() {
    wp_enqueue_style('Bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('FontAwesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('bootstrapValidator', get_stylesheet_directory_uri() . '/css/bootstrapValidator.css');
    wp_enqueue_style('Hover', get_stylesheet_directory_uri() . '/css/hover-min.css');
    wp_enqueue_style('Animate', get_stylesheet_directory_uri() . '/css/animate.css');
    wp_enqueue_style('Slick', get_stylesheet_directory_uri() . '/css/slick.css');
    wp_enqueue_style('SlickTheme', get_stylesheet_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('styles', get_stylesheet_uri());

    wp_enqueue_script('JQuery', get_stylesheet_directory_uri() . '/js/jquery-3.4.1.min.js');
    wp_enqueue_script('Popper', get_stylesheet_directory_uri() . '/js/popper.min.js');
    wp_enqueue_script('Bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('BootstrapValidator', get_stylesheet_directory_uri() . '/js/bootstrapValidator.js');
    wp_enqueue_script('SmoothScroll', get_stylesheet_directory_uri() . '/js/smooth-scroll.js');
    wp_enqueue_script('Waypoints', get_stylesheet_directory_uri() . '/js/waypoints.min.js');
    wp_enqueue_script('Slick', get_stylesheet_directory_uri() . '/js/slick.min.js');
    wp_enqueue_script('Wow', get_stylesheet_directory_uri() . '/js/wow.min.js');
    wp_enqueue_script('Main', get_stylesheet_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'landing_styles');

add_theme_support('post-thumbnails');

?>