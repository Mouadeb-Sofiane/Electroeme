<?php get_header(); 
/* template name: a_propos */


function add_meta_description()
{
?>
<meta name="description" content="Découvrez qui nous sommes et notre engagement. Apprenez-en plus sur notre histoire, nos valeurs et notre vision. Rejoignez-nous dans notre parcours!">
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