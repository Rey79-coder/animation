<?php
function blogwaves_child_enqueue_scripts(){

    wp_enqueue_script('masonry');
    wp_enqueue_script( 'masonry-blogwaves-main', get_stylesheet_directory_uri() . '/assets/js/blogwaves-main.js',array('jquery'),true);

    wp_enqueue_style( 'blogwaves-parent-style', get_template_directory_uri() . '/style.css');  
    wp_enqueue_style('masonry-blogwaves-style',get_stylesheet_uri());
    wp_enqueue_style('font-awesome-css-child', get_stylesheet_directory_uri() . '/assets/css/font-awesome.css');
}
add_action('wp_enqueue_scripts','blogwaves_child_enqueue_scripts');