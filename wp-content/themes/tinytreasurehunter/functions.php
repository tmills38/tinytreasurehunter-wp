<?php

function tiny_treasure_hunter_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tinytreasurehunter'),
        'footer'  => __('Footer Menu', 'tinytreasurehunter'),
    ));
}
add_action('after_setup_theme', 'tiny_treasure_hunter_setup');

function tiny_treasure_hunter_scripts() {
    wp_enqueue_style('tiny-treasure-hunter-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'tiny_treasure_hunter_scripts');
