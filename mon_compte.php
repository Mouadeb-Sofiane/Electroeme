<?php 
/* template name: moncompte */
get_header(); 

function add_meta_description()
{
?>
<meta name="description" content="Accédez à votre espace personnel. Gérez vos informations, vos commandes et profitez de fonctionnalités personnalisées. Connectez-vous pour une expérience sur mesure.">
<?php
}
?>

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