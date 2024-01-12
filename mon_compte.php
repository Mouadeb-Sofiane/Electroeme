<?php 
/* template name: moncompte */

get_header(); ?>
<p class="br1"></p>

    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            the_content();
            //
            // Post Content here
            //
        } // end while
    } // end if
    ?>
</div>
<?php get_footer(); ?>
<style>
    .br1 {
        margin-bottom: 35px;
    }
    body {
        font-family: 'Poppins', sans-serif;        
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
</style>