<?php
/*
 * Template Name: Page
 * Description: Page 
 */

get_header(); ?>

    <section id="wallpaper">
        <div class="row">
            <div class="col-1-1">
               <div class="content">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/wallpaper2.jpg" alt="">
               </div>
            </div>
        </div>
    </section>

    <section id="breadcrumbs">
        <div class="row">
            <div class="col-1-1">
                u bent nu hier: 
                <ul>
                    <?php get_breadcrumb(); ?>
                </ul>
            </div>
        </div>
    </section>


    <section id="main">
        <div class="row">
            <div class="col-3-12 aside lastelement">
                <div id="accordion" class="content">
                    <p class="subsection wtul"><?php get_father_title(); ?></p>

                    <?php get_father_children(); ?>

                </div>
            </div>
            <div class="col-9-12 article lastelement">
                <div class="content">
                    <p class="title"><?php the_title(); ?></p>


                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
