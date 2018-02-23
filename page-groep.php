<?php
/*
 * Template Name: Page-groep
 * Description: Page-groep
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
                            <p class="subsection wtul"><?php get_father_title(); ?></p>

                            <?php get_father_children2(); ?>

                        </div>
                    </div>
                    <div class="col-9-12 article lastelement">
                        <div class="content">
                            <p class="title"><?php the_title(); ?></p>
                            <div class="row">
                                <div class="col-1-2">
                                    <div class="content spacebottom">
                                        <p><?php the_field('welkom_text'); ?></p>
                                        <ul class="details">
                                            <li>                    
                                                <label>Leerkracht:</label>
                                                <span><?php the_field('leerkracht'); ?></span>
                                            </li>
                                            <li>
                                                <label>Aantal:</label>
                                                <span><?php the_field('aantal_kids'); ?></span>
                                            </li>
                                            <li>
                                                <label>Over onze groep:</label>
                                                <span class="br"><?php the_field('over_onze_groep'); ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-1-2">
                                    <div class="greenfooter">
                                        <?php 
                                        $image = get_field('groetjes_foto');
                                        if( !empty($image) ): ?>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php endif; ?>




<!--                                         <img src="<?php bloginfo( 'template_directory' ); ?>/img/itsok.jpg" alt=""> -->
                                        <p>Groetjes uit <?php the_title(); ?>!</p>
                                    </div>
                                </div>
                            </div>

                                <?php
                                    $groepname = strtolower(str_replace(' ', '', the_title('', '', false)));
                                    $groepname = str_replace('/', '-', $groepname);
                                    // echo $groepname;
                                ?>


                                <?php $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

                                    $query_args = array(
                                        'post_type' => 'fotogalerijen ',
                                        'posts_per_page' => 4,
                                        'order' => 'ASC',
                                        'category_name' => $groepname
                                    );
                                    
                                    $the_query = new WP_Query( $query_args ); ?>
                
                                    <?php if ( $the_query->have_posts() ) : ?>

                            <div class="row fotogalerijen">
                                <p class="title">Fotogalerijen</p>

                                        <div class="displat">
                                    
                                            <!-- the loop -->
                                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                            <a class="fotobck" href="<?php the_permalink() ?>" >
                                                <div class="fotoverflow">
                                                    <div class="foto-hover"></div>
                                                    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false); ?>
                                                    <div class="foto-image" style="background: url(<?php echo $src[0]; ?> );"></div>
                                                </div>
                                            </a>

                                            <?php endwhile; ?>
                                            <!-- end of the loop -->
                           
                                            <?php wp_reset_postdata(); ?>

                                        </div>  
                                        
                                <a href="<?php echo home_url() ?>/fotogalerijen/" class="button arrowin btnarticle">Bekijk alle foto's</a>
                            </div>

                                    <?php endif; ?>

<!--                             <div class="row">
                                <div class="col-1-2 clearfix">
                                    <p class="title">Uit de klas</p>
                                    <div class="greybackground clearfix">
                                        <a href="#" class="date">
                                            <div class="datecontainer datearrowin">
                                                Kinderboekenweek: Thema: FEEST!
                                                <span class="br">01-02-16</span>
                                            </div>
                                        </a>
                                        <a href="#" class="date">
                                            <div class="datecontainer datearrowin">
                                                Evenaardag
                                                <span class="br">01-02-16</span>
                                            </div>
                                        </a>
                                        <a href="#" class="date">
                                            <div class="datecontainer datearrowin">
                                                Dans-en graffitiworkshop
                                                <span class="br">01-02-16</span>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="#" class="button arrowin btnarticle">Alle activiteiten uit de klas</a>
                                </div>
                                <div class="col-1-2 clearfix">
                                    <p class="title">Kalender</p>
                                    <div class="greybackground clearfix">
                                        <a href="#" class="date">
                                            <div class="datecontainer">
                                                Kookworkshop
                                                <span class="br">01-02-16</span>
                                            </div>
                                        </a>
                                        <a href="#" class="date">
                                            <div class="datecontainer">
                                                Schaatsem voor water
                                                <span class="br">01-02-16</span>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="#" class="button arrowin btnarticle">Bekijk hele agenda</a>
                                </div>
                            </div> -->

<!--                             <div class="row">
                                <div class="col-1-2"> -->

                                <?php if( $overige = get_field('overige_informatie') ){ ?>
                                    <p class="title">Overige informatie</p>
                                    <p><?php echo $overige; ?></p>
                                <?php } ?>



<!--                                 </div>
                                <div class="col-1-2">
                                    <p class="title">Handige links</p>
                                    <a href="#" class="btnsvg bluepastelbackground">
                                        <span class="iconlinks icnblue">
                                            <svg viewBox="0 0 30 120">
                                                <g filter="">
                                                    <use xlink:href="#face"></use>
                                                </g>
                                            </svg>
                                        </span>
                                        kind ziek melden
                                    </a>
                                    <a href="#" class="btnsvg greenpastelbackground">
                                        <span class="iconlinks icngreen">
                                            <svg viewBox="0 0 30 120">
                                                <g filter="">
                                                    <use xlink:href="#mail"></use>
                                                </g>
                                            </svg>
                                        </span>
                                        contact met de leerkracht
                                    </a>
                                    <a href="#" class="btnsvg greybackground">
                                        <span class="iconlinks icngrey">
                                            <svg viewBox="0 0 30 120">
                                                <g filter="">
                                                    <use xlink:href="#cloud"></use>
                                                </g>
                                            </svg>
                                        </span>
                                        alle downloads
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>

<?php endwhile; endif; ?>

<?php
get_footer();


