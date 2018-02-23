<?php
/*
 * Template Name: Belevenaar
 * Description: Belevenaar
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
					<h3>Vragen?</h3>
					Neem telefonisch of via de e-mail contact met ons op:<br /><br />
					t. <a href="tel:023-5472737">023-5472737</a><br />
					e. <a href="mailto:info@basisschooldeevenaar.nl">E-mail ons</a>
                </div>
            </div>
            <div class="col-9-12 article lastelement">
                <div class="content inschrijven">
                    <p class="title"><?php the_title(); ?></p>
					<?php  the_content(); ?>
					<div class="all_belevenaar_wrapper">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('belevenaar') ):
						
						 	// loop through the rows of data
						    while ( have_rows('belevenaar') ) : the_row();
						
						        // display a sub field value ?>
						        
						        <a href="<?php the_sub_field('bestand'); ?>" target="_blank">
						        <div class="belevenaar_wrapper">
							        <div class="belevenaar_icon"><img src="<?php echo get_template_directory_uri() ?>/img/icon_pdf.svg" class="belevenaar_img" /></div>
							        <div class="belevenaar_title">
								        <h3><?php the_sub_field('titel'); ?></h3>
							        </div>
						        </div>
						        </a>
						
						    <?php endwhile;
						
						else :
						
						    // no rows found
						
						endif;
						
					?>
					</div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();