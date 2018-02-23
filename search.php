<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package De Evenaar
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
                    <li><a href="<?php echo home_url() ?>" class="breadcrumb-link">Home</a></li>
					<li><a href="#" class="breadcrumb-active inactive">Zoeken</a></li>
                </ul>
            </div>
        </div>
    </section>


    <section id="main">
        <div class="row">
            <div class="col-3-12 aside lastelement search-page-search">
                <form method="get" role="search" action="<?php bloginfo('url'); ?>">
	                <div class="searchbox">
                    <div class="inputgroup">
                        <label for="search">ZOEKEN OP DE SITE:</label>
                        <input type="search" class="search-field" placeholder="Uw zoekterm..." title="Search" name="s"/>
                        <input type="hidden" name="post_type" value="page" />
                        <input type="submit" class="search-submit" value="" style="">
                    </div>
	                </div>
                </form>
                <div id="accordion" class="content">
					<h3>Vragen?</h3>
					Neem telefonisch of via de e-mail contact met ons op:<br /><br />
					t. <a href="tel:023-5472737">023-5472737</a><br />
					e. <a href="mailto:info@basisschooldeevenaar.nl">E-mail ons</a>
				</div>
            </div>
            <div class="col-9-12 article lastelement">
                <div class="content searchresults">
                    <p class="title">Zoekresultaten</p>
					
					<?php
						if ( have_posts() ) : ?>
				
							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Zoekresultaten voor: %s', 'deevenaar' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->
				
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();
				
								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								 get_template_part( 'content', 'search' );
				
							endwhile;
							
							$args = array(
					            'prev_text'          => ( 'Ouder' ),
					            'next_text'          => ( 'Nieuwer' ),
					            'screen_reader_text' => ( 'Pagina-navigatie' ),
					        );
							the_posts_navigation($args);
				
						else :
							
							echo 'Helaas kunnen we de opgegeven zoekterm niet vinden op de website.<br /><br />Probeer het hiernaast nog eens met een andere zoekterm.';
							// get_template_part( 'template-parts/content', 'none' );
				
						endif;
					?>

                </div>
            </div>
        </div>
    </section>

<?php
// get_sidebar();
get_footer();
