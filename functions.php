<?php
/**
 * Functions file
 * @package First Example
*/

add_action('wp_enqueue_scripts', 'theme_register_styles');
function theme_register_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_footer', 'theme_register_scripts');
function theme_register_scripts() {
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}