<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php wp_head(); ?>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home - Kirby's World</title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon2.ico">
    </head>
    <body <?php body_class(); ?>>

        <div class="header">
            <?php


                if(function_exists('the_custom_logo')) {
                    the_custom_logo();
                }

            ?>
            
            <h1><?php the_title();  ?></h1>
        </div>

        <div class="nav">

       <?php

            wp_nav_menu(

                array(
                  'theme_location' => 'header-menu',
                  'container_class' => 'top-nav'
                )

            );

        ?>

        </div>

            

        </div>