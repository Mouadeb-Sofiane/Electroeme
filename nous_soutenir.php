<?php 
/* template name: nous_soutenir */
get_header (); 

function add_meta_description()
{
?>
<meta name="description" content="Contactez-nous pour toute question, suggestion ou demande d'assistance. Notre équipe est là pour vous aider. Restons connectés!Soutenez notre mission en faisant un don ou en participant à nos initiatives. Ensemble, construisons un avenir meilleur. Merci pour votre soutien!>
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
    body {
        font-family: 'Poppins', sans-serif;        
    }
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
</style>