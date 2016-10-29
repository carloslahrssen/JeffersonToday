<?php
    function stylesheet(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
add_action('wp_enqueue_scripts', 'stylesheet');

//nav
register_nav_menus(array(
    'primary' => __('Primary Menu')
));

//customize excerpt amount
function custom_excerpt_length(){
    return 100;
}
add_filter('excerpt_length', 'custom_excerpt_length');

function themesetup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'themesetup');
 ?>
