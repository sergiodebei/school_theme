<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package De Evenaar
 */

get_header(); ?>

	<div id="fof">
<!-- 		<img src="<?php bloginfo( 'template_directory' ); ?>/img/404.png" alt=""> -->
		<img class="pencil" src="<?php bloginfo( 'template_directory' ); ?>/img/pencil.png" alt="">
		<h1 class="message">Sorry!</h1>
		<p>De pagina waar u naar opzoek bent bestaat niet!</p>
		<img class="evisad" src="<?php bloginfo( 'template_directory' ); ?>/img/evisad.png" alt="">
		<a class="button" href="<?php echo home_url(); ?>">Terug naar homepage</a>

	</div>

<?php
get_footer();
