<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JeffersonToday</title>
        <link rel="stylesheet" href="style.css">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container">
            <header class="site-header">
                <h1><a href="<?php echo home_url();?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                <p><?php echo get_bloginfo( 'description' ); ?></p>

                <nav class="site-nav">
                    <?php
                        $args = array(
                            'theme_location' => 'primary'
                        );
                     ?>
                    <?php wp_nav_menu($args); ?>
                </nav>
            </header><!--siteheader-->
