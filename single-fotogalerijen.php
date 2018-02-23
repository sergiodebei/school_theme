<?php
/*
 * Template Name: Single fotogalerij
 * Description: Single fotogalerij
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
                    <?php get_breadcrumb_for_custom_post_type(); ?>
                </ul>
            </div>
        </div>
    </section>


    <section id="main">
        <div class="row">
            <div class="col-3-12 aside lastelement">
                <div id="accordion" class="content">
                    <h3>Vragen?</h3>
                    Neem telefonisch of via de e-mail contact met ons op:<br /><br />
                    023-547273<br />
                    <a href="mailto:info@basisschooldeevenaar.nl">Of e-mail ons</a>
                </div>
            </div>
            <div class="col-9-12 article lastelement">
                <div class="content">
                    <p class="title"><?php the_title(); ?></p>
                    <div class="singlefotogalerij">

                        <p class="datum"><?php the_field("datum"); ?></p>
                        <p class=""><?php the_content(); ?></p>

                        <div class="gallery-item-container">
                            <?php 

                            $images = get_field('afbeeldingen');

                            if( $images ): ?>
                                <?php foreach( $images as $image ): ?>
                                    <a class="gallery-item" href="<?php echo $image['url']; ?>" data-rel="lightbox-gallery-1">
                                        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false); ?>
                                        <div class="gallery-item-fotobck" style="background: url(<?php echo $image['url']; ?> );"></div>

<!--                                         <img class="fotobck" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> -->
                                    </a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php
get_footer();

