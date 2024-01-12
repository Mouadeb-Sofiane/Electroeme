<?php
/*
Template Name: poemes1 
*/
acf_form_head();
get_header();
?>

<p class="br1"></p>

<body>
    <p class="br1"></p>
    <div class="img-container">
        <div class="image-container1">
            <img class="img_boussole" src="<?php echo get_template_directory_uri() . '/img/img-banniere.png'; ?>" alt="Image qui montre que l'on est dans la section poème" />
            <div class="image-text">Poèmes</div>
        </div>
    </div>

        <div class="color">
            <div class="poeme-container">
                <p class="poeme-titre">Ecrit ton propre poème</p>
                <?php if (is_user_logged_in()) : ?>
                    <button class="btn_or" id="toggleForm">+</button>

                    <div id="monFormulaire" action="" method="post" style="display: none;">
                        <?php
                        acf_form(array(
                            'post_id'      => 'new_post',
                            'new_post'     => array(
                                'post_type'   => 'poemes',
                                'post_status' => 'publish'
                            ),
                            'post_title'   => 'Créer ton poème',
                            'field_groups' => array('group_655f11488fe11'),
                            'submit_value' => 'Soumettre le poème'
                        ));
                        ?>
                    </div>
                <?php else : ?>
                    <p>Vous devez être connecté pour créer un poème.</p>
                <?php endif; ?>
            </div>
            <div class="">
                <p class="poeme-titre">Rechercher des poèmes</p>
                <div class="search-container">
                    <div class="search-form">
                        <div class="search_css">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
<p class="br1"></p>
<div>
    <h2 class="h2">Tous les poèmes</h2>
</div>
<div class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="card">
                <div class="card-content" style="background-color: #f2f2f2;">
                    <?php if (get_field('images')) : ?>
                        <?php $image_url = get_field('images'); ?>
                        <img class="card-image" src="<?php echo $image_url; ?>" alt="Image mise en avant pour le poème" style="<?php echo $image_url_style; ?>" />
                    <?php else : ?>
                        <img class="card-image" src="<?php echo get_template_directory_uri() . '/img/img_poeme.png'; ?>" alt="Image mise en avant pour le poème" />
                    <?php endif; ?>
                    <div class="text-section">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <h3 class="card-author lireplus-link"><?php echo get_field('nom_de_auteur'); ?></h3>
                            <p class="card-text"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?></p>
                            <p class="lireplus lireplus-link">Lire plus</p>
                        </a>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php get_footer(); ?>


<script>
    document.getElementById("toggleForm").addEventListener("click", function () {
        var form = document.getElementById("monFormulaire");
        if (form.style.display === "none") {
            form.style.display = "block";
        } else {
            form.style.display = "none";
        }
    });
</script>



<style>
    .img_boussole {
        /* Your existing styles for the image */
        width: 100%;
        height: auto;
    }

    .image-text {
        position: absolute;
        top: 42%; /* Adjust the vertical position */
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
    }

    .card-image {
        width: 300px;
        height: 200px;
        object-fit: cover;
        padding: 15px;
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
    .acf-button {
        background-color: #DEA966 !important;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
<script>
    /*
    document.getElementById("toggleForm").addEventListener("click", function() {
        var form = document.getElementById("monFormulaire");
        if (form.style.display === "none") {
            form.style.display = "block";
        } else {
            form.style.display = "none";
        }
    });*/
</script>
<!--
            <form id="monFormulaire" action="" method="post" style="display: none;">
                <label for="champ1">Titre du poème :</label>
                <input type="text" id="champ1" class="champ1" name="champ1">
                <br>
                <label for="champ2">Contenu du poème :</label>
                <input type="text" id="champ2" class="champ2" name="champ2">
                <label for="imagePoeme">Image du poème :</label>
                <input type="file" id="imagePoeme" name="imagePoeme" onchange="previewImage(this)">
                <br>
                <img id="imagePreview"  alt="Aperçu de l'image" style="display: none; max-width: 300px; margin-top: 10px;">
                <br>
                <div class="champ">
                    <label for="champ3">Date de création :</label>
                    <input type="text" id="champ3" class="champ3" name="champ3">
                    <label for="champ4">Nom de l'auteur :</label>
                    <input type="text" id="champ4" class="champ4" name="champ4">
                </div>
                <button type="submit">Envoyer</button>
            </form>
            -->
<?php
/*
function traiter_formulaire_acf() {
    // Vérifiez si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérez les données du formulaire
        $titre_du_poeme = sanitize_text_field($_POST['champ1']);
        $contenu_du_poeme = sanitize_text_field($_POST['champ2']);
        $date_creation = sanitize_text_field($_POST['champ3']);
        $nom_de_auteur = sanitize_text_field($_POST['champ4']);


        // Traitement de l'image
        $imagePoeme = $_FILES['imagePoeme'];

        if ($imagePoeme['size'] > 0) {
            $upload_dir = wp_upload_dir();
            $image_data = wp_handle_upload($imagePoeme, array('test_form' => false));

            if ($image_data && !isset($image_data['error'])) {
                $image_id = wp_insert_attachment(array(
                    'post_title'     => $titre_du_poeme,
                    'post_content'   => $contenu_du_poeme,
                    'post_status'    => 'inherit',
                    'post_mime_type' => $image_data['type'],
                    'guid'           => $image_data['url']
                ), $image_data['file']);

                $image_url = wp_get_attachment_image_src($image_id, 'full')[0];
                $image_url_style = 'width: 90%; height: 200px;';

            } else {
                echo 'Erreur lors du téléchargement de l\'image';
                return; // Arrêtez l'exécution si une erreur se produit
            }
        } else {
            $image_url = get_template_directory_uri() . './img/img_poeme.png';
        }

        // Créez une nouvelle entrée de type de publication personnalisé avec les données
        $nouveau_post = array(
            'post_title'    => $titre_du_poeme,
            'post_content'  => $contenu_du_poeme,
            'post_status'   => 'publish',
            'post_type'     => 'poemes',
        );

        // Insérez le nouveau post et obtenez son ID
        $post_id = wp_insert_post($nouveau_post);

        if ($post_id) {
            // Mettez à jour les champs personnalisés avec les données du formulaire
            update_field('titre_du_poeme', $titre_du_poeme, $post_id);
            update_field('contenu_du_poeme', $contenu_du_poeme, $post_id);
            update_field('date_creation', $date_creation, $post_id);
            update_field('nom_de_auteur', $nom_de_auteur, $post_id);
            update_field('images', $image_url, $post_id);


            // Redirigez l'utilisateur vers la page des poèmes
            wp_redirect('http://localhost/electroeme/wordpress/poemes/');
            exit;
        }
    }
}

// Associez la fonction au hook de WordPress approprié
// add_action('template_redirect', 'traiter_formulaire_acf');
// add_action('wp_enqueue_scripts', 'traiter_formulaire_acf');
*/
?>

<script>
/*
function previewImage(input) {
    var preview = document.getElementById('imagePreview');
    var file = input.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = '#';
        preview.style.display = 'none';
    }
}*/
</script>