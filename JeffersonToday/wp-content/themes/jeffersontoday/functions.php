<?php
    function stylesheet(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
add_action('wp_enqueue_scripts', 'stylesheet');

//nav
register_nav_menus(array(
    'primary' => __('Primary Menu')
));
 ?>