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
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/DWlogo.jpg" width="125" height="60" alt="Kirby's World Home">
            <h1><?php the_title();  ?></h1>
        </div>

        <div class="nav">
            <ul>
                <li><a href="<?php echo home_url(); ?>">home</a></li>
                <li>games</li>
                <li><a href="<?php echo home_url(); ?>">movies</a></li>

               <div class="dropdown">
                   <button onclick="characters()" class="char-btn">characters</button>
                   <div id="chars" class="char-container">
                       <a href="">ashley</a>
                       <a href="">leliana</a>
                       <a href="">lightning</a>
                   </div>
               </div>
                
                <li>gallery</li>

            </ul>

            

        </div>