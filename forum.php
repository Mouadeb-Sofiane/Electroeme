<?php
/* template name: forums */
function add_meta_description()
{
?>
<meta name="description" content="Rejoignez notre forum et engagez-vous dans des conversations stimulantes. Partagez vos idées, posez des questions et connectez-vous avec une communauté passionnée de poètes et d'étudiants préparant leurs examens.">
<?php
}

get_header();
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

