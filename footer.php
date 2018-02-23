<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DeEvenaar
 */

?>
 
   <footer id="footer">
        <div class="row">
            <div class="col-1-1 lastelement">
                <div class="flexcenter greybackground">
                    <p>Basisschool De Evenaar © <?php echo date("Y"); ?> - Alle rechten voorbehouden
<!--                     <br/>In overeenkomst met de algemene voorwaarden -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
</div>

 <!-- ICONS -->
    <svg id="svg-source" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">

      <g id="calendar">
        <path  d="M109.9,12.2H95.4V6.3c0-3.4-2.8-6.2-6.2-6.2c-3.4,0-6.2,2.8-6.2,6.2v5.8H41.8V6.3c0-3.4-2.8-6.2-6.2-6.2
            s-6.2,2.8-6.2,6.2v5.8H14.7C8.8,12.1,4,17,4,22.9v79.6c0,5.9,4.8,10.7,10.7,10.7h85.5c11.3,0,20.4-9.1,20.4-20.4V23
            C120.7,17.1,115.9,12.2,109.9,12.2z M14.7,20.8h14.5c0.1,3.3,2.9,6.1,6.2,6.1c3.4,0,6.2-2.8,6.2-6.1h41c0.1,3.3,2.9,6.1,6.2,6.1
            c3.3,0,6.2-2.8,6.2-6.1h14.5c1.2,0,2.1,1,2.1,2.1v16.8H12.6V23C12.6,21.8,13.5,20.8,14.7,20.8z M12.6,102.6V48.2h99.6v37.7H94.5
            l-0.1,18.9H14.7C13.5,104.7,12.6,103.7,12.6,102.6z M103,104.4l0.1-10h8.9C111.4,99.3,107.7,103.3,103,104.4z"/>
        <path class="st2" d="M37.6,68.5c0-4,1.4-6.8,3.7-8.7c2.3-1.8,5.4-2.8,8.6-2.8c8.6,0,11.5,5.8,11.5,8.6c0,7-3.9,7-3.9,7.2v0.1
            c0,0.4,4.8,0.4,4.8,7.8c0,4.1-2.7,10.5-12.5,10.5c-13.3,0-13.3-10.5-13.1-13.1h8.1c0,1.8,0.3,3.1,1.2,4c0.9,1.1,2,1.5,3.5,1.5
            c2.5,0,4-1,4-3.8c0-2.9-2-3.4-4-3.4c-1.2,0-1.8,0.1-2.5,0.2v-6.6c0.6,0,1.3,0.2,2.5,0.2c1.8,0,4.1-0.4,4.1-3c0-2.1-2.1-2.9-3.9-2.9
            c-2.3,0-4.2,1.4-4.1,4.2L37.6,68.5L37.6,68.5z"/>
        <path class="st2" d="M75,71.5h-7v-7c4.3,0.1,8.6-1.7,8.8-7.2h7v33.4H75V71.5z"/>
      </g>

      <g id="book">
            <path d="M119.3,0c-1.5,0-36,0.2-57,17.2C41.3,0.2,6.8,0,5.3,0H0v105.5h5.3c27.5,0,44.8,5.2,51.5,7.7h11
        c6.6-2.5,23.7-7.7,51.5-7.7h5.3V0H119.3z M57,102.1c-8.5-2.8-23.9-6.5-46.4-7V10.8c10.2,0.8,33,3.8,46.4,15.7V102.1z M114,95.1
        c-22.5,0.5-38,4.3-46.4,7V26.6c13.5-12,36.2-15,46.4-15.7V95.1z"/>
      </g>

    </svg>
    <!-- ICONS -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-89808031-1', 'auto');
          ga('send', 'pageview');

        </script>


<?php wp_footer(); ?>

</body>
</html>
