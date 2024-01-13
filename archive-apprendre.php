<?php 
/*
Template Name: Apprendre Leçon
*/
acf_form_head();
get_header(); ?>
<p class="br1"></p>
        <div class="image-container1">
            <img class="img_boussole" src="<?php echo get_template_directory_uri() . '/img/img-banniere.png'; ?>" alt="Image qui montre que l'on est dans la section poème" />
            <div class="image-text">Leçons</div>
        </div>

        
        <div class="color">
    <div class="poeme-container">
        <p class="poeme-titre">Rédige ta leçon</p>
        <?php if (is_user_logged_in()) : ?>
            <button class="btn_or" id="toggleFormBtn">+</button>
            <div id="apprendreForm" style="display: none;">
                <?php
                acf_form(array(
                    'post_id'      => 'new_post',
                    'new_post'     => array(
                        'post_type'   => 'apprendre',
                        'post_status' => 'publish'
                    ),
                    'post_title'   => 'Créer une Leçon',
                    'field_groups' => array('group_6555cf851fdc2'),
                    'submit_value' => 'Soumettre la leçon'
                ));
                ?>
            </div>
            <div id="optionalFieldsForm" style="display: none;">
                <?php
                // Remplacez 'group_optional' par l'ID de votre groupe facultatif
                acf_form(array(
                    'post_id'      => 'new_post',
                    'new_post'     => array(
                        'post_type'   => 'apprendre',
                        'post_status' => 'publish'
                    ),
                    'field_groups' => array('group_optional'),
                    'submit_value' => 'Soumettre les champs facultatifs'
                ));
                ?>
            </div>
        <?php else : ?>
            <p>Vous devez être connecté pour créer une leçon.</p>
        <?php endif; ?>
    </div>
    <div class="search-container">
    <p class="poeme-titre">Rechercher des leçons</p>
    <div class="search-form">
        <div class="search_css">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>
</div>

<p class="br"></p>

<div class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="card">
                <div class="card-content">
                    <?php if (get_field('image_de_correspondance')) : ?>
                        <?php $image_url = get_field('image_de_correspondance'); ?>
                        <img class="card-image" src="<?php echo $image_url; ?>" alt="Image mise en avant pour le poème" style="<?php echo $image_url_style; ?>" />
                    <?php else : ?>
                        <img class="card-image" src="<?php echo get_template_directory_uri() . '/img/img_poeme.png'; ?>" alt="Image mise en avant pour le poème" />
                    <?php endif; ?>
                        <div class="text-section">
                        <a href="<?php the_permalink(); ?>">
                                <h2 class="card-title"><?php the_title(); ?></h2>
                                <h3 class="card-author lireplus-link">
                                <?php
                                    $titre_lecon = get_field('titre_de_la_lecon');
                                    $mots = explode(' ', $titre_lecon);
                                    echo implode(' ', array_slice($mots, 0, 4));
                                    if (count($mots) > 4) {
                                        echo '...';
                                    }
                                    ?>
                                </h3>   
                        </div>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?></p>
                            <p class="card-text">
                            <?php
                                $titre_lecon = get_field('field_6555d08c7da08');
                                $mots = explode(' ', $titre_lecon);
                                echo implode(' ', array_slice($mots, 0, 6));
                                if (count($mots) > 4) {
                                    echo '...';
                                }
                                ?>
                            </p>
                        <p class="lireplus lireplus-link">Lire plus</p>
                    </a>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<div style="text-align: center;">
    <p>Voilà donc tous les cours issus de Electroeme</p>
</div>

<?php get_footer(); ?>



<style>
    
    .img_boussole {
        /* Your existing styles for the image */
        width: 99.6%;
        height: auto;
    }

    .image-text {
        position: absolute;
        top: 37%; /* Adjust the vertical position */
        left: 30%; /* Adjust the horizontal position */
        transform: translate(-80%, -50%);
        color: #1e1e1e; /* Text color */
        font-size: 24px; /* Adjust the font size */
        font-weight: bold;
        /* Add any other styles you need for the text */
    }

    .br1 {
        margin-bottom: 35px;
    }
    .h2 {
        margin-left: 5%;
        font-size: 36px;
        font-weight: bold;
    }
    .img-container {
        position: relative;
    }
    .search_css {
        /*alongement de la search bar*/
    }
    .poeme-titre {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10%;
        margin-top: 10%;
    }

    .color {
        display: flex;
        justify-content: space-between;
        align-items: center; /* Ajout de l'alignement au centre */
        background-color: #D8BFD8;
    }

    .poeme-container {
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Ajustement ici pour aligner à gauche et à droite */
        align-items: flex-start;
        margin: 20px;
    }

    /* alongement de la search bar */
    .search-container {
        display: flex;
        align-items: center;
    }

    .search-form {
        width: 100%;
        height: 280%; /* Adjusted to 100% */
        display: flex;
        align-items: center;
    }

    .search-input {
        padding: 10px; 
        border-radius: 30px 0 0 30px; 
        border: 1px solid #D8BFD8; 
        margin-top: 16px;
        height: 45px;
    }

    .loupe {
        width: 20px;
        height: 20px;
    }

    .lireplus-link {
        text-decoration: underline;
        cursor: pointer; 
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 30px;
        margin-bottom: 5%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .card-row {
        display: flex;
        justify-content: space-evenly;
        flex-basis: 30%; /* Ajustez en fonction de vos besoins */
    }

    #imagePreview {
        max-width: 100%;
        max-height: 300px; /* ou une valeur appropriée selon vos besoins */
        margin-top: 10px;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        overflow: hidden;
        border: 2px solid #D8BFD8;
        background-color: #fff;
    }

    .card-image {
        width: 300px;
        height: 200px;
        object-fit: cover;
        margin-top: 15px; 
        margin-left: 15px;
        margin-right: 15px;
    }

    .card-title {
        margin: 10px 0;
        font-size: 18px;
        font-weight: bold;
    }

    .card-text {
        font-size: 14px;
        color: #555;
        margin-bottom: 10px;
    }

    .btn_or {
        background-color: #DEA966;
        color: #fff;
        border: none;
        border-radius: 50%; /* Set to 50% to create a perfect circle */
        cursor: pointer;
        width: 40px; /* Adjust the width to your preference */
        height: 40px; /* Adjust the height to your preference */
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 40%;
        margin-top: 10%;
    }

    .champ {
        display: flex;
        justify-content: space-between;
    }

    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    #monFormulaire {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-size: 11px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    .champ2 {
        height: 300px; /* Ajustez la hauteur selon vos besoins */
        width: 100%;
    }

    .champ3,
    .champ4 {
        width: 38%; /* Ajustez la largeur selon vos besoins */
    }

    button {
        background-color: #DEA966;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #A7712D;
    }

    .br1 {
        margin-bottom: 35px;
    }

    .color {
        background-color: #D8BFD8;
        text-align: center;
        padding: 30px;
        font-size: 22px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 30px;
        margin-bottom: 5%;
    }

    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .lireplus-link {
        text-decoration: underline;
        cursor: pointer; 
    }

    .color {
        display: flex;
        justify-content: space-between;
        align-items: center; /* Ajout de l'alignement au centre */
        background-color: #D8BFD8;
    }

    .poeme-container {
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Ajustement ici pour aligner à gauche et à droite */
        align-items: flex-start;
        margin: 20px;
    }
    .search-container {
        display: flex;
        align-items: center;
    }

    .search-form {
        width: 100%;
        height: 280%; /* Adjusted to 100% */
        display: flex;
        align-items: center;
    }
    .poeme-titre {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10%;
        margin-top: 10%;
    }
    .search-container {
        display: flex;
        align-items: center;
    }

    .search-form {
        width: 100%;
        height: 280%; /* Adjusted to 100% */
        display: flex;
        align-items: center;
    }

    .lireplus-link {
        text-decoration: underline;
        cursor: pointer; 
    }

    .acf-button {
        background-color: #DEA966 !important;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toggleFormBtn = document.getElementById('toggleFormBtn');
        var apprendreForm = document.getElementById('apprendreForm');

        if (toggleFormBtn && apprendreForm) {
            toggleFormBtn.addEventListener('click', function () {
                if (apprendreForm.style.display === 'none' || apprendreForm.style.display === '') {
                    apprendreForm.style.display = 'block';
                    toggleFormBtn.textContent = '-';
                } else {
                    apprendreForm.style.display = 'none';
                    toggleFormBtn.textContent = '+';
                }
            });
        }
    });
</script>
