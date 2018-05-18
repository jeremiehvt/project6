<?php
/*
* add CSS and Javascript
*
*
*
*/
function axcess_enqueue_scripts(){
    
    wp_enqueue_style('bootstrap','//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css',[],'4.1.0');

    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js', [], '3.2.1', true);

    wp_enqueue_script('bootstrap_jquery', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', [], '4.0.0', true);

    wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], '1.12.3', 
        true);
}

add_action( 'wp_enqueue_scripts', 'axcess_enqueue_scripts' );

/*
*
*/
// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';

/*
* Register Menu
* 
*
*/
function register_main_menu() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'axcesstheme'),      
        )
    );
}

add_action('init', 'register_main_menu');

/*
*
*
*
*/
add_theme_support('post-thumbnails');

/*
*
*
*
*/
add_theme_support( 'automatic-feed-links' );

/*
*
*
*
*/
function axcess_post_formats_setup() {
    add_theme_support('post-formats', array('aside', 'gallery', 'video'));
}
add_action('after_setup_theme', 'axcess_post_formats_setup');

/*
*
*
*
*/
function axcess_custom_post_formats_setup() {
    add_post_type_support('page','post-formats');
}
add_action('init', 'axcess_custom_post_formats_setup');

/*
*
*
*
*/
function axcesstheme_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/assets/img/Wallpaper_1.png',
        'default-text-color' => '000',
        'width'              => 1920,
        'height'             => 450,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'axcesstheme_custom_header_setup' );

/*
*
*
*
*/
function axcesstheme_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'axcesstheme_custom_logo_setup' );