<?php
function enqueue_styles() {
    wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
    wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
    wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
if (!function_exists('mytheme_setup')):
    function mytheme_setup(){
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 9999);
        add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
    }
endif;
add_action('after_setup_theme', 'mytheme_setup');
function new_excerpt_more($more) {

    global $post;

    return " <a class='intro-news__link' href='". get_permalink($post->ID) . "'>Подробнее</a>";

}

add_filter("excerpt_more", "new_excerpt_more");