<?php

function theme_files() {
    wp_enqueue_style('theme_custom_styles', get_theme_file_uri('/css/output.css'));
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js");
}
add_action('wp_enqueue_scripts', 'theme_files');

function theme_features() {
    register_nav_menu('header-main-menu', 'Header Main Menu');
    register_nav_menu('header-user-menu', 'Header User Menu');
    register_nav_menu('footer-secondary-menu', 'Footer Secondary Menu');
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'theme_features' );