<?php  get_header (); 
/*template name: contacter*/
function add_meta_description()
{
?>
<meta name="description" content="Contactez-nous pour toute question, suggestion ou demande d'assistance. Notre équipe est là pour vous aider. Restons connectés!">
<?php
}
?>
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

<style>
    h1 {
        font-family: 'Sansita', sans-serif;
    }
    h2 {
        font-family: 'Sansita', sans-serif;
    }
    h3 {
        font-family: 'Sansita', sans-serif;
    }
    h4 {
        font-family: 'Sansita', sans-serif;
    }
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>