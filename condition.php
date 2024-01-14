<?php  
/*template name: conditons*/
get_header (); 
function add_meta_description()
{
?>
<meta name="description" content="Consultez nos conditions d'utilisation pour comprendre les règles et directives. Utilisez notre plateforme de manière responsable et profitez pleinement de nos services éducatifs et créatifs.">
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