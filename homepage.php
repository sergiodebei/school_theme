<?php
/*
 * Template Name: Homepage
 * Description: Homepage 
 */

get_header(); ?>

            <section id="wallpaper">
                <div class="row">
                    <div class="col-1-1">
                       <div class="content">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/wallpaper.jpg" alt="">
                       </div>
                    </div>
                </div>
            </section>

            <section id="welcomeclicksearch">
                <div class="row toinvert">
                    <div class="col-4-12 left">
                        <div class="content">
                            <div class="row">
                                <div class="content">
                                    <div class="col-1-1 mobile-col-4-12 searchboxout">
                                        <div class="searchbox">
                                            <form method="get" role="search" action="<?php bloginfo('url'); ?>">
                                                <div class="inputgroup">
                                                    <label for="search">ZOEKEN OP DE SITE:</label>
                                                    <input type="search" class="search-field" placeholder="Uw zoekterm..." title="Search" name="s"/>
                                                    <!--<input type="hidden" name="post_type" value="page" />-->
                                                    <input type="submit" class="search-submit" value="" style="">
                                                </div>
                                            </form>
                                        </div>  
                                    </div>
                                    <div class="col-4-12 mobile-col-4-12 hidden kal">
                                        <div class="content">
                                            <a href="<?php bloginfo('url'); ?>/praktisch/jaarkalender/" class="bluepastelbackground flexcenter iconwrapper">
                <!--                                 <img src="img/evenaar_calender.svg" alt="" class="icon"> -->
                                                    <div class="icon">
                                                        <svg viewBox="0 0 130 120">
                                                            <g filter="">
                                                                <use xlink:href="#calendar"></use>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                <p class="icontext">kalender</p>
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="col-4-12 mobile-col-4-12 hidden nopadding">
                                        <div class="content">
                                            <a href="belevenaar/" class="greenpastelbackground flexcenter iconwrapper">
                <!--                                 <img src="img/evenaar_book.svg" alt="" class="icon"> -->
                                                    <div class="icon">
                                                        <svg viewBox="0 0 130 120">
                                                            <g filter="">
                                                                <use xlink:href="#book"></use>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                <p class="icontext">de belevenaar</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row tohide">
                                <div class="content">
                                    <div class="col-1-2">
                                        <div class="content">
                                            <a href="<?php bloginfo('url'); ?>/praktisch/jaarkalender/" class="bluepastelbackground flexcenter iconwrapper">
                <!--                                 <img src="img/evenaar_calender.svg" alt="" class="icon"> -->
                                                    <div class="icon">
                                                        <svg viewBox="0 0 130 120">
                                                            <g filter="">
                                                                <use xlink:href="#calendar"></use>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                <p class="icontext">kalender</p>
                                            </a> 
                                        </div>
                                    </div>
                                    <div class="col-1-2">
                                        <div class="content">
                                            <a href="belevenaar/" class="greenpastelbackground flexcenter iconwrapper">
                <!--                                 <img src="img/evenaar_book.svg" alt="" class="icon"> -->
                                                    <div class="icon">
                                                        <svg viewBox="0 0 130 120">
                                                            <g filter="">
                                                                <use xlink:href="#book"></use>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                <p class="icontext">de belevenaar</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8-12 right lastelement">
                        <div class="content">
                            <div class="evi">
                                <div class="row">
                                    <div class="padding">
                                        <p class="groete">
<!--                                             Hoi, ik ben evi! <br/>   -->
                                            <?php the_field('home_page_welcome_title'); ?>
                                        </p>
                                        <p><?php the_field('home_page_welcome_message'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tools">
                <div class="row">
                    <div class="col-1-3 medium-col-1-6 mobile-col-1-1">
                       <div class="content">
                            <div class="<?php the_field('first_box_background_color'); ?> widget flip flexcenter">
                                <p><?php the_field('first_box_first_line'); ?></p>
                                <p class="groete"><?php the_field('first_box_second_line'); ?></p>
                                <a href="<?php the_field('first_box_link'); ?>" class="button arrowin toset"><?php the_field('first_box_button_text'); ?></a>
                            </div>
                       </div>
                    </div>
                    <div class="col-1-3 medium-col-1-6 mobile-col-1-1">
                       <div class="content">
                            <div class="<?php the_field('second_box_background_color'); ?> widget flip flexcenter">
                                <p><?php the_field('second_box_first_line'); ?></p>
                                <p class="groete"><?php the_field('second_box_second_line'); ?></p>
                                <a href="<?php the_field('second_box_link'); ?>" class="button btngrey arrowin toset"><?php the_field('second_box_button_text'); ?></a>
                            </div>
                       </div>
                    </div>
                    <div class="col-1-3 medium-col-1-6 mobile-col-1-1 magix lastelement">
                       <div class="content">
                            <div class="<?php the_field('third_box_background_color'); ?> widget flip flexcenter">
                                <p><?php the_field('third_box_first_line'); ?></p>
                                <p class="groete"><?php the_field('third_box_second_line'); ?></p>
                                <a href="<?php the_field('third_box_link'); ?>" class="button btngreen arrowin toset"><?php the_field('third_box_button_text'); ?></a>
                            </div>
                       </div>
                    </div>
                    <div class="col-1-3 medium-col-1-6 mobile-col-1-1 margintop hidden">
                       <div class="content">
                            <div class="<?php the_field('fourth_box_background_color'); ?> widget flexcenter">
                                <p><?php the_field('fourth_box_first_line'); ?></p>
                                <p class="groete"><?php the_field('fourth_box_second_line'); ?></p>
                                <a href="<?php the_field('fourth_box_link'); ?>" class="button arrowin toset"><?php the_field('fourth_box_button_text'); ?></a>
                            </div>
                       </div>
                    </div>
                </div>
            </section>

            <section id="photosocial">
                <div class="row">
                    <div class="col-8-12 fullwidth">
                    <div class="content photosocialbgcontainer">

<!--                         <div class="photosocialbg" data-slides="[ &quot;http://any1.eu/evenaar/wp-content/themes/deevenaar/img/fotos/image1.jpg&quot;, &quot;http://any1.eu/evenaar/wp-content/themes/deevenaar/img/fotos/image2.jpg&quot;, &quot;http://any1.eu/evenaar/wp-content/themes/deevenaar/img/fotos/image3.jpg&quot;, &quot;http://any1.eu/evenaar/wp-content/themes/deevenaar/img/fotos/image5.jpg&quot;, &quot;http://any1.eu/evenaar/wp-content/themes/deevenaar/img/fotos/image7.jpg&quot;]" style="background-image: url(&quot;http://any1.eu/evenaar/wp-content/themes/deevenaar/img/fotos/image2.jpg&quot;);">
                        </div> -->
                    

                        <div class="photosocialbg" data-slides='[ <?php $images = get_field('foto_gallery'); foreach($images as $image) { $elements[] = '"' . $image['url'] . '"'; } echo implode(',', $elements); ?>]'>
                        </div>
        


                        <a href="<?php the_field('fotogalerijen_link'); ?>" class="button arrowin photosocialbgbtn">Alle fotogalerijen</a>
                        </div>
                    </div>
                    <div class="col-4-12 tohide lastelement">
                    <div class="content">
                        <div class="<?php the_field('fourth_box_background_color'); ?> widget flexcenter">
                            <p><?php the_field('fourth_box_first_line'); ?></p>
                            <p class="groete"><?php the_field('fourth_box_second_line'); ?></p>
                            <a href="<?php the_field('fourth_box_link'); ?>" class="button arrowin toset" target="_blank"><?php the_field('fourth_box_button_text'); ?></a>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

<?php
get_footer();
