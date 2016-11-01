<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JeffersonToday</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <span class ="home-button">Menu</span>
            <nav class="site-nav" id="navlink">
                <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                 ?>
                <?php wp_nav_menu($args); ?>
            </nav>
        <div class="container">
            <header class="site-header">
                <h1><a href="<?php echo home_url();?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                <p class="description"><?php echo get_bloginfo( 'description' ); ?></p>

            </header><!--siteheader-->
