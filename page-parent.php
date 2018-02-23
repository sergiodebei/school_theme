<?php
/*
 * Template Name: Page-parent
 * Description: Page-parent 
 */

get_header(); ?>

<?php if ( have_posts() ) :while ( have_posts() ) : the_post(); ?>

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
                    <p class="subsection wtul"><?php the_title(); ?></p>

                    <?php get_children_father2(); ?>

                </div>
            </div>
            <div class="col-9-12 article lastelement">
                <div class="content">
                    <p class="title"><?php the_title(); ?></p>

                    <?php if (get_field("activate_tip") ) : ?> 

                        <div class="infobox">
                            <div class="row">
                                <div class="col-1-2 mobile-col-1-2">
                                    <div class="tip">
                                        <p><?php the_field("tip_text"); ?></p>
                                    </div>
                                </div>
                                <div class="col-1-2 mobile-col-1-2 evitips">
                                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/evitips.png" alt="">
                                </div>
                            </div>
                        </div>

                     <?php endif; ?>

              	<?php the_content(); ?>

                </div>

            </div>
        </div>


    </section>

<?php endwhile; endif; ?>

<?php
get_footer();

