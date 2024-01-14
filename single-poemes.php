<?php get_header(); 
function add_meta_description()
{
?>
<meta name="description" content="Explorez un poème unique sur notre site. Plongez dans l'émotion, la créativité et la beauté des mots. Découvrez l'art de l'expression poétique et laissez-vous inspirer par cette œuvre exceptionnelle.">
<?php
}
?>
 
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div>
      <div>
      <div class="img-container">
          <img class="img_boussole" src="<?php echo get_template_directory_uri() . '/img/img_figure_de_style2.png'; ?>" alt="Image d'une main qui écrit avec un stylo" />
          <h1 class="image_text"><?php the_title(); ?></h1>
        </div>
            <div class="group">
                <div class="iccon">
                    <h3 class="title">
                        <div><?php the_field("titre_du_poeme"); ?></div>
                    </h3>
                </div>
            </div>
            <div class="contenu">
                <div class="contenu_poème"><?php the_field("contenu_du_poeme"); ?></div>
                <?php if (get_field('images')) : ?>
                    <?php $image_url = get_field('images'); ?>
                    <img class="img2" src="<?php echo $image_url; ?>" alt="Image d'une plume." />
                <?php endif; ?>
            </div>
            <div class="en_bas">
                <div class="date"><?php the_field("date_creation"); ?></div>
                <div class="auteur"><?php the_field("nom_de_auteur"); ?></div>
            </div>
        <div>
            <p class="br1"></p>
            <div class="anec">
                <?php if (get_field("notes_de_lauteur")) : ?>
                    <div class="astuce">Notes de l'auteur</div>
                        <p class="br1"></p>
                        <div class="aut">
                        <?php the_field("notes_de_lauteur"); ?>
                    </div>
                <?php endif; ?>
                <?php if (get_field("anecdote")) : ?>
                    <div class="astuce1">Anecdote</div>
                        <p class="br1"></p>
                        <div class="aut">
                        <?php the_field("anecdote"); ?>
                    </div>
                <?php endif; ?>
            </div>
        <p class="br1"></p>
    </div>
    <div>
        <div>
        <?php
            $args = array(
                'post_type' => 'poemes', // Le CPT agence
                'meta_query' => array(
                    array(
                        'key' => 'poemes', // Nom du champ relationnel
                        'value' => '"' . get_the_ID() . '"', // recherche exacte de l'ID
                        'compare' => 'LIKE'
                    )
                )
            );

            $poemes = new WP_Query($args);
            if ($poemes->have_posts()) :
                // Affichez ici les détails supplémentaires si nécessaire
            endif;
            wp_reset_postdata();
        ?>
    </div>
    <div>
        <div class="group">
            <div class="iccon">
                <h2 class="title">
                    Les poèmes qui pourraient vous intéressez</h2>
            </div>
        </div>
    </div>
    <div class="container">
            <?php
            $args = array(
                'post_type'      => 'poemes', // Replace with your custom post type
                'posts_per_page' => 3, // Display all posts
            );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
            while ($custom_query->have_posts()) : $custom_query->the_post();
                ?>
            <article class="card">
                <a href="<?php the_permalink(); ?>">
                    <div class="card-content">
                        <?php if (get_field('images')) : ?>
                            <?php $image_url = get_field('images'); ?>
                            <img class="card-image" src="<?php echo $image_url; ?>" alt="Image mise en avant pour le poème" />
                        <?php else : ?>
                            <img class="card-image" src="<?php echo get_template_directory_uri() . '/img/img_poeme.png'; ?>" alt="Image mise en avant pour le poème" />
                        <?php endif; ?>
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <h3 class="card-author lireplus-link"><?php echo get_field('nom_de_auteur'); ?></h3>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?></p>
                        <p class="lireplus lireplus-link">Lire plus</p>
                    </div>
                </a>
            </article>
            <?php endwhile;
            endif;
        wp_reset_postdata(); // Reset the query ?>
    </div>
    <div class="btn">
        <button class="btn-ensavoirplus"><a href="https://electroeme.com/poemes/">En savoir plus</a></button>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<p class="br"></p>
</div>
<?php get_footer(); ?>

<style>
    .astuce1 {
        font-size: 20px;
        font-weight: bold;
        background-color: #DEA966; /* Couleur de fond du rectangle */
        padding: 10px 30px; /* Espace intérieur du rectangle, 10px en haut et en bas, 30px à gauche et à droite */
        border-radius: 30px; /* Rayon des coins pour des bords arrondis */
        display: inline-block; /* Permet au fond de s'ajuster à la largeur du texte */
        margin-left: 3%;
    } 
    .aut1{
        margin-left: 70%;
        margin-bottom: 3%;
        width: 35%;
    }
    .astuce {
        font-size: 20px;
        font-weight: bold;
        background-color: #DEA966; /* Couleur de fond du rectangle */
        padding: 10px 30px; /* Espace intérieur du rectangle, 10px en haut et en bas, 30px à gauche et à droite */
        border-radius: 30px; /* Rayon des coins pour des bords arrondis */
        display: inline-block; /* Permet au fond de s'ajuster à la largeur du texte */
        margin-left: 3%;
    } 
    .aut{
        margin-left: 7%;
        margin-bottom: 3%;
        width: 55%;
    }
    .astuce {
        font-size: 20px;
        font-weight: bold;
        background-color: #DEA966; /* Couleur de fond du rectangle */
        padding: 10px 30px; /* Espace intérieur du rectangle, 10px en haut et en bas, 30px à gauche et à droite */
        border-radius: 30px; /* Rayon des coins pour des bords arrondis */
        display: inline-block; /* Permet au fond de s'ajuster à la largeur du texte */
        margin-left: 3%;
    } 
    .br1 {
            margin-bottom: 35px;
        }
    .en_bas {
        display: flex;
        justify-content: space-between;
        margin-left: 7%;
        margin-right: 70%;
    }
    .contenu{
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin: 0 auto;
    }
    .contenu_poème{
        margin-left: 7%;
        margin-bottom: 3%;
        width: 25%;
    }
    .img2 {
        width: 450px;
        margin-right: 15%;
        border-radius: 30px;
     }
    .para {
        margin-left: 7%;
        margin-bottom: 3%;
        width: 60%;
    }
    .title {
        font-size: 20px;
        font-weight: bold;
        background-color: #D8BFD8; /* Couleur de fond du rectangle */
        padding: 10px 20px; /* Espace intérieur du rectangle autour du texte */
        border-radius: 30px; /* Rayon des coins pour des bords arrondis */
        display: inline-block; /* Permet au fond de s'ajuster à la largeur du texte */
        margin-left: 3%;
        /*alonge moi le rectangle que sur les côtés*/
    }
    .group {
      margin-bottom: 3%;
    }

    .iconn {
        display: flex;
        align-items: center;
        margin-left: 5%;
        }
    .subtitleA {
        margin-left: 2%;
        flex: 1; /* Faites en sorte que le sous-titre prenne toute la largeur restante */
    }

    .astuce {
        font-size: 20px;
        font-weight: bold;
        background-color: #DEA966; /* Couleur de fond du rectangle */
        padding: 10px 30px; /* Espace intérieur du rectangle, 10px en haut et en bas, 30px à gauche et à droite */
        border-radius: 30px; /* Rayon des coins pour des bords arrondis */
        display: inline-block; /* Permet au fond de s'ajuster à la largeur du texte */
        margin-left: 3%;
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
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        gap: 30px;
        margin-bottom: 5%;
    }
    .image_text {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #1e1e1e; /* Text color */
        font-size: 34px; /* Choisir la taille de la police */
        font-weight: bold; /* Choisir le poids de la police si nécessaire */
    }
    .img-container {
        position: relative;
        text-align: center;
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
        padding: 25px 40px;
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
    .img_boussole {
        width: 99.6%;
        height: auto;
    }
</style>
