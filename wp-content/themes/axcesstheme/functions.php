<?php
#add CSS and Javascript Link---
#
#
#
#
function bootstrap_enqueue_style(){
    wp_enqueue_style('bootstrap_css','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
}

function bootstrap_enqueue_scripts(){
    wp_enqueue_style('bootstrap_js','https://code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_style('bootstrap_js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
     wp_enqueue_style('bootstrap_js','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
}

add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_scripts' );
#
#
#
#end CSS and JS integration---

add_action('widgets_init','zero_add_sidebar');
function zero_add_sidebar()
{
    register_sidebar(array(
        'id' => 'my_custom_zone',
        'name' => 'Zone supérieure',
        'description' => 'Apparait en haut du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}

add_action('int', 'my_add_menu');
function my_add_menu() {
	register_nav_menu('main_menu', 'Menu_principal');
}

add_filter('the_title', 'truncate_long_title');

function truncate_long_title($title)
{
    if (strlen($title) > 50) {
        $title = substr($title, 0, 50).'...';
    }
    return $title;
}

load_theme_textdomain( 'axcesstheme', get_template_directory() . '/languages' );
