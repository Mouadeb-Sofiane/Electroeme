<?php get_header(); 
/* template name: a_propos */?>
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
<?php get_footer(); ?>