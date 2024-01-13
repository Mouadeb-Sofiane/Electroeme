<?php 
/* template name: s_inscrire */

get_header(); ?>
<p class="br1"></p>
<div class="background-container">
    <div class="ravi">
        <img class="logo1" src="<?php echo get_template_directory_uri() . './img/logo.png'; ?>" alt="Image qui montre que l'on est dans la section s'inscrire "/>
        <h1>Bienvenue sur Electroeme !</h1>
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
    .connexion {
        margin-left: 60%;
        margin-right: 10%;
        margin-top: 5%;
        margin-bottom: 5%;
    }
    .ravi {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: left;
    }
    h1 {
        font-size: 40px;
        font-weight: 600;
        color: #000000;
        margin-right: 15%;
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
        background-image: url('<?php echo get_template_directory_uri() . '/img/page_inscription.png'; ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }
    .logo1{
        width: 100px;
        margin-left: 45%;
    }
</style>