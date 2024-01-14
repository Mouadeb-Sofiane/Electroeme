<?php 
/* template name: compte */
function add_meta_description()
{
?>
<meta name="description" content="Accédez à votre espace personnel. Gérez vos informations, vos commandes et profitez de fonctionnalités personnalisées. Connectez-vous pour une expérience sur mesure.">
<?php
}
get_header(); ?>

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