<?php
/*
 * Template Name: Fotogalerijen
 * Description: Fotogalerijen page 
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
                <div class="content">
                    <p class="title"><?php the_title(); ?></p>
					
					<?php $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

                        
                        $months = array(
                            '01' => 'Januari',
                            '02' => 'Februari',
                            '03' => 'Maart',
                            '04' => 'April',
                            '05' => 'Mei',
                            '06' => 'Juni',
                            '07' => 'Juli',
                            '08' => 'Augustus',
                            '09' => 'September',
                            '10' => 'Oktober',
                            '11' => 'November',
                            '12' => 'December',
                        );


	                  	$query_args = array(
	                      	'post_type' => 'fotogalerijen ',
	                      	'posts_per_page' => -1,
                            'meta_key' => 'datum',
                            'orderby' => 'datum',
	                       	'order' => 'DESC'
	                    );
	                    
	                  	$the_query = new WP_Query( $query_args ); ?>

                        <?php $current_header = ''; ?>
	
	                    <?php if ( $the_query->have_posts() ) : ?>



                            <!-- the loop -->
                            <?php
                                
                                $current_year = '';
                                $current_month = '';
                                
                                while ( $the_query->have_posts() ) : $the_query->the_post(); 

                                $startdate = get_field("datum");
                                $eventdate = explode("/", $startdate);
                                print_r($myArray);
                                
                                $temp_year = $eventdate[2];
                                $temp_month = $eventdate[1];
                                
                                if ( $temp_year != $current_year ) {
                                    $current_year = $temp_year;
                                    echo "</div>";
                                    echo "<h2 class='year'>$current_year</h2>";
                                    echo "<div class='fotogalerijencontainer'>";
                                }
                                
                                if ( $temp_month != $current_month ) {
                                    $current_month = $temp_month;
                                    echo "</div>";
                                    echo "<h3>$months[$current_month] $current_year</h3>";
                                    echo "<div class='fotogalerijencontainer'>";
                                }
                                
                                ?>
							    <a class="foto-wrapper" href="<?php the_permalink() ?>" >
								    <div class="foto-title"><?php the_title(); ?></div>
<!-- 								    <div class="foto-date"><?php the_field("datum"); ?></div> -->
								    <div class="fotoverflow">
                                        <div class="foto-hover"></div>
										<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false); ?>
										<div class="foto-image" style="background: url(<?php echo $src[0]; ?> );"></div>
    								</div>
							    </a>

                                <?php 
                                if ( $temp_month != $current_month ) {
                                    echo 'EIND';
                                }
                                    ?>
                            <?php endwhile; ?>
                            <!-- end of the loop -->
                   
        
                          <?php wp_reset_postdata(); ?>
        
                          <?php else:  ?>
                          <?php endif; ?>
	                  	
            </div>
        </div>
    </section>

<?php endwhile; endif; ?>

<?php
get_footer();
