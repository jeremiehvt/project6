<?php
function displayHello() {
echo "<p id=\"content\">bonjour</p>";
}


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
