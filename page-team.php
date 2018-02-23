<?php
/*
 * Template Name: Team 
 * Description: Team page 
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
                    <?php get_breadcrumb_nonactivepage(); ?>
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
                <div id="teampage" class="content">
                    <p class="title"><?php the_title(); ?></p>

                    <?php the_content(); ?>
                    
                    <div id="team-wrapper">
                    <?php

						// check if the repeater field has rows of data
						if( have_rows('teamlid') ):
						
						 	// loop through the rows of data
						    while ( have_rows('teamlid') ) : the_row();
						
						        // display a sub field value
						        
						        $image = get_sub_field('personpic');
						       						        
						        ?>
						        <div class="teamlid">
							        <div class="team-pic-wrapper" style="background-image: url(<?php echo $image['url']; ?>);"></div>
							        <div class="team-info">
								        <div class="team-name"><?php the_sub_field('personname'); ?></div>
								        <div class="team-function"><?php the_sub_field('personfunction'); ?></div>
							        </div>
						        </div>
						        
						<?php
								//the_sub_field('personname');
						        //the_sub_field('personfunction');
						    endwhile;
						
						else :
						
						    // no rows found
						
						endif;
					
					?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; endif; ?>

<?php
get_footer();
