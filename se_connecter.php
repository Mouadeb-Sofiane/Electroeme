<?php 
/* template name: se_connecter */

function add_meta_description()
{
?>
<meta name="description" content="Connectez-vous à notre site et accédez à votre compte en toute sécurité. Profitez d'une expérience utilisateur fluide et sécurisée.">
<?php
}

add_action('wp_head', 'add_meta_description');

get_header();
?>
<p class="br1"></p>
<div class="background-container">
    <div class="ravi">
        <h1>Ravi de vous revoir !</h1>
        <img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="Image qui montre que l'on est dans la section se connecter" class="logo1">
    </div>
    <div class="connexion">
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
</div>

<?php get_footer(); ?>
<style>
    .connexion {
        margin-left: 10%;
        margin-right: 60%;
        margin-top: 5%;
        margin-bottom: 5%;
    }
    .ravi {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    h1 {
        font-size: 40px;
        font-weight: 600;
        color: #000000;
        margin-left: 10%;
    }
    .br1 {
        margin-bottom: 35px;
    }
    body {
        font-family: 'Poppins', sans-serif;        
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .background-container {
        background-image: url('<?php echo get_template_directory_uri() . '/img/page_connexion.png'; ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }
    .logo1{
        width: 100px;
        margin-right: 45%;
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
