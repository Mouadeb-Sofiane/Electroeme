<?php  
/*template name: politique*/
function add_meta_description()
{
?>
<meta name="description" content="Consultez notre politique de confidentialité pour comprendre comment nous traitons vos données. Garantie de protection des informations personnelles et respect de la vie privée.">
<?php
}
get_header (); 
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