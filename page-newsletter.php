<?php
/*
 * Template Name: Newsletter
 * Description: Newsletter 
 */

get_header(); ?>

  <div id="post-<?php the_ID(); ?>" class="newsletter">

    <?php  the_content(); ?>

  </div>

<?php
get_footer();
