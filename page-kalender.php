<?php
/*
 * Template Name: Kalender 
 * Description: Kalender page 
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
                <div class="content">
                    <p class="title"><?php the_title(); ?></p>

                    <?php //the_content(); ?>
					
					<?php
						
					$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

	                  $query_args = array(
	                      'post_type' => 'events',
	                      'posts_per_page' => -1,
						    'meta_key' => 'startdate',
						    'orderby' => 'startdate',
	                       'order' => 'ASC'
	                    );
	                    
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
	
	                  $the_query = new WP_Query( $query_args ); ?>
	
	                  <?php $current_header = ''; ?>
	
	                    <?php if ( $the_query->have_posts() ) : ?>
						
	                    <!-- the loop -->
	                    <?php
		                    
		                    $current_year = '';
		                    $current_month = '';
		                    
		                    while ( $the_query->have_posts() ) : $the_query->the_post(); 

						    $startdate = get_field("startdate");
						    $eventdate = explode("/", $startdate);
						    //print_r($myArray);
						    
						    $temp_year = $eventdate[2];
						    $temp_month = $eventdate[1];
						    
						    if ( $temp_year != $current_year ) {
						        $current_year = $temp_year;
						        echo "</div>";
						        echo "<h2 class='year'>$current_year</h2>";
						        echo "<div class='event-month'>";
						    }
						    
						    if ( $temp_month != $current_month ) {
						        $current_month = $temp_month;
						        echo "</div>";
						        echo "<h3>$months[$current_month] $current_year</h3>";
						        echo "<div class='event-month'>";
						    }
						    
						    ?>
						    <div class="event-wrapper">
							    <div class="event-header"><?php the_field("datetext"); ?></div>
							    <div class="event-content">
								    <div class="event-inner"><?php the_content(); ?></div>
							    </div>
						    </div>
							
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
        </div>
    </section>

<?php endwhile; endif; ?>

<?php
get_footer();
