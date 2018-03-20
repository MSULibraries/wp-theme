<?php 

if ( ! function_exists('msulib_setup')):
    function msulib_setup(){
        // Let WP handle the title tags
        add_theme_support('title-tag');
    }

endif; 

add_action('after_setup_theme', 'msulib_setup'); 

/* ----- Register Menus -----*/

function register_msulib_menus(){
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    )); 
}

add_action('init', 'register_msulib_menus');

/* ----- Add Style Sheets -----*/

function msulib_scripts(){
    
    /* Enqueue Main Style Sheet  */
    wp_enqueue_style('msulib_styles', get_stylesheet_uri());


    /* Add component style sheets */
    wp_enqueue_style( 'content', get_template_directory_uri() . '/css/content.css',false,'1.1','all');
    wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css',false,'1.1','all');
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css',false,'1.1','all');
    wp_enqueue_style( 'main-right', get_template_directory_uri() . '/css/main-right.css',false,'1.1','all');


    /** Add Bootstrap */
    wp_enqueue_style('msulib_bootstrap_css', 'http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('tabby_tabs_css', 'https://cdnjs.cloudflare.com/ajax/libs/tabby/11.2.0/css/tabby.min.css');
    wp_register_script('jQuery', 'http://code.jquery.com/jquery-3.2.1.slim.min.js', null, null, false);
    wp_enqueue_script('jQuery');
    wp_register_script('popperJs', 'http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', null, null, false);
    wp_enqueue_script('popperJs');
    wp_register_script('bootstrapJs', 'http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', null, null, false);
    wp_enqueue_script('bootstrapJs');

}

add_action('wp_enqueue_scripts', 'msulib_scripts');
?>