<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DeEvenaar
 */

?><!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>De Evenaar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.ico" />    
<!--         <link rel="icon" type="image/png" href="img/favicon.png" /> -->
        
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
                <?php wp_head(); ?>
    </head>
    <body class="screen">
         <div class="container containerfortheheader">  
            <header id="header">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo_evenaar.svg" alt=""></a>
                    <nav class="nav">
                        ​<?php wp_nav_menu( array( 'container'=> false, 'theme_location' => 'primary') ); ?>​
                        <?php shiftnav_toggle( 'shiftnav-main' , '' , array( 'icon' => 'bars' , 'class' => 'shiftnav-toggle-button') ); ?>
                    </nav>
            </header>



                <?php 

                  $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

                  $query_args = array(
                      'post_type' => 'message',
                      'posts_per_page' => -1,
                      'order' => 'ASC'
                    );

                  $the_query = new WP_Query( $query_args ); ?>

                  <?php if ( $the_query->have_posts() ) : ?>

                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        
                    <section>
                        <div id="note">
                            <?php the_content(); ?>
                            <a href="#" id="close-message"><span class="close thick"></span></a>
                        </div>
                    </section>

                    <?php endwhile; ?>
                    <!-- end of the loop -->

                  <?php wp_reset_postdata(); ?>

                  <?php else:  ?>
                  <?php endif; ?>

            </div>
            <!-- end of the containerfortheheader -->

            <div class="container">