<?php
/* template name: home */

get_header();

if (have_posts()) {
    the_post();
    the_content();
}

// Your custom content starts here
?>
<div>
    <h2 class="h2">Les dernières sorties de leçons </h2>
</div>
<div class="container">
    <?php
    $args = array(
        'post_type'      => 'apprendre', // Replace with your custom post type
        'posts_per_page' => 3, // Display all posts
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            ?>
            <article class="card">
                <a href="<?php the_permalink(); ?>">
                    <div class="card-content" style="background-color: #f2f2f2;">
                    <?php
                        $image = get_field('image_de_correspondance');
                        if ($image) {
                            echo '<img class="card-image" src="' . esc_url($image['url']) . '" alt="Image mise en avant pour les leçons" />';
                        }
                        ?>
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
                    </div>
                </a>
            </article>
            <?php
        endwhile;
        wp_reset_postdata(); // Reset the query
    endif;
    ?>
</div>
<div class="btn">
    <button class="btn-ensavoirplus"><a href="https://electroeme.com/apprendre/">En savoir plus</a></button>
</div>


    <div class="br"></div>
    <div>
        <h2 class="h2">Les poèmes du moment</h2>
    </div>
    <img src="<?php echo get_template_directory_uri() . '/img/home_fiche.png'; ?>" alt="#" class="img_fiche">
    <div class="container">
        <?php
        // Use a new query for the second section
        $args = array(
            'post_type'      => 'poemes', // Replace with your custom post type for articles
            'posts_per_page' => 3, // Display all posts
        );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            ?>
            <article class="card">
                <a href="<?php the_permalink(); ?>">
                    <div class="card-content" style="background-color: #f2f2f2;">
                        <?php if (get_field('images')) : ?>
                            <?php $image_url = get_field('images'); ?>
                            <img class="card-image" src="<?php echo $image_url; ?>" alt="Image mise en avant pour le poème" />
                        <?php else : ?>
                            <img class="card-image" src="<?php echo get_template_directory_uri() . '/img/img_article.png'; ?>" alt="Image mise en avant pour l'article" />
                        <?php endif; ?>
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <h3 class="card-author lireplus-link"><?php echo get_field('nom_de_auteur'); ?></h3>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?></p>
                        <p class="lireplus lireplus-link">Lire plus</p>
                    </div>
                </a>
            </article>
            <?php
        endwhile;
    endif;
    wp_reset_postdata(); // Reset the query
    ?>
    </div>
    <div class="btn">
        <button class="btn-ensavoirplus"><a href="https://electroeme.com/poemes/">En savoir plus</a></button>
    </div>
    <div class="br"></div>
    <div>
        <h2 class="h2">Electroeme compte sur vous</h2>
    </div>
    <div class="donation-container">
        <img src="<?php echo get_template_directory_uri() . '/img/text_donnation_accueil.png'; ?>" alt="#" class="img-donation">
        <div class="donation">
            <button class="btn-don"><a href="https://electroeme.com/nous-soutenir/">Je fais un don</a></button>
        </div>
    </div>
    <div style="display: flex; align-items: center;">
        <img src="<?php echo get_template_directory_uri() . '/img/anca-dorneanu.png'; ?>" alt="#" class="img_anca">

        <div class="rectangle">
            <p style="text: bold;"><strong>Vous avez des questions, des difficultés ? Contactez-nous par e-mail :</p>
            <div class="br"></div>
            <p><a href="mailto:mmi.pomnn@gmail.com" class="color_mail">mmi.pomnn@gmail.com</a></strong></p>
        </div>
    </div>

    <div class="br1"></div>
    <?php
    // Your custom content ends here

    get_footer();
    ?>

<style>
    .color_mail {
        color: #DEA966;
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 30px;
        margin-bottom: 5%;
    }
    .btn-don {
        padding: 25px 40px;
        font-size: 22px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-ensavoirplus {
        padding: 25px 40px;
        font-size: 22px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .img_anca {
        width: 32%;
        height: auto;
        margin-left: 5%;
    }

    .flex-container {
        display: flex;
        align-items: center;
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
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 30px;
        margin-bottom: 5%;
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
    }
    .card-image {
        width: 100%;
        max-height: 200px; /* Ajustez la hauteur maximale en fonction de vos besoins */
        object-fit: cover;
        margin-top: 15px;
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
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 30px;
        margin-bottom: 5%;
    }

    .br {
        margin-bottom: 100px;
    }

    .textbold {
        font-weight: bold;
        text-decoration: underline;
    }

    .color {
        background-color: #85B5F7;
        text-align: center;
        padding: 30px;
        font-size: 22px;
    }

    .btn-ensavoirplus {
        padding: 15px 20px;
        font-size: 22px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn {
        text-align: center;
        margin-bottom: 5%;
    }
    button {
        background-color: #DEA966;
        color: #1e1e1e;
        padding: 30px 50px;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        font-size: 24px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    body {
    font-family: 'Poppins', sans-serif;
    }
    .img_fiche {
        width: 70%;
        height: auto;
        margin-left: 15%;
        margin-top: 1%;
    }

    .rectangle {
        background-color: #D8BFD8;
        text-align: center;
        padding: 3%;
        font-size: 22px;
        margin-left: 5%;
        margin-right: 5%;
    }

    .donation-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 5%;
    }

    .img-donation {
        width: 30%; /* Adjust the width as needed */
        height: auto;
        margin-right: 550px; /* Add margin for spacing between image and button */
        margin-top: 1%;
    }

    .donation {
        text-align: center;
    }

    .img_fiche {
        width: 70%;
        height: auto;
        margin-left: 15%;
        margin-top: 1%;
    }

    .btn {
        text-align: center;
        margin-bottom: 5%;
    }

    button {
        background-color: #DEA966;
        color: #1e1e1e;
        padding: 30px 50px;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        font-size: 24px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    button:hover {
        background-color: #A7712D;
    }
    .br {
        margin-bottom: 70px;
    }
    .br1 {
        margin-bottom: 35px;
    }

    .h2 {
        margin-left: 5%;
        font-size: 36px;
        font-weight: bold;
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
        gap: 160px; /* Adjust the gap to control the space between cards */
        margin-bottom: 5%;
    }

    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
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
    }

    .card-image {
        width: 90%;
        height: 200px;
        object-fit: cover;
        margin-top: 15px;
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

    .poeme-titre {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
    }

    .color {
        display: flex;
        justify-content: space-between;
        align-items: center; /* Ajout de l'alignement au centre */
        margin: 20px;
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
        margin: 20px;
    }

    .search-form {
        margin-left: auto;
    }

    .lireplus-link {
        text-decoration: underline;
        cursor: pointer;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        margin-bottom: 5%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .card-row {
        display: flex;
        justify-content: space-evenly;
        flex-basis: 30%; /* Ajustez en fonction de vos besoins */
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

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 30px;
        margin-bottom: 5%;
    }
</style>

