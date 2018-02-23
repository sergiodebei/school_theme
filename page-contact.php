<?php
/*
 * Template Name: Contact
 * Description: Contact
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
        <div class="row rowreverse">
            <div class="col-3-12 aside lastelement">
                <div id="accordion" class="content">
					<h3>Adres school</h3>
					<strong>De Evenaar</strong><br />
					Van der Waalslaan 33<br />
					2105 TC Heemstede<br /><br />
                    t. <a href="tel:023-5472737">023-5472737</a><br />
                    e. <a href="mailto:info@basisschooldeevenaar.nl">E-mail ons</a>


                </div>
            </div>
            <div class="col-9-12 article lastelement">
                <div class="content inschrijven">
                    <p class="title"><?php the_title(); ?></p>
					<?php  the_content(); ?>

                </div>
            </div>
        </div>
    </section>

<?php
get_footer();