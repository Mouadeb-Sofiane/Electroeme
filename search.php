<?php get_header(); ?>
    <div>
        <h1><?php single_cat_title(); ?></h1>
    </div>
    <div class="search-container">
        <div class="rectangle-search" >
            <?php get_search_form(); ?>
        </div>
    </div>
<div class="container">
   
    <div class="search-results">
        <?php if (have_posts()) : ?>
            <p class="result">Voici les résultats de la recherche :</p>
            <?php while (have_posts()) : the_post(); ?>
                <div class="card" style="margin-bottom: 20px; border-bottom: 1px solid #ccc; padding-bottom: 20px; display: grid; grid-template-columns: 1fr auto;">
                    <div>
                        <img class="img_boussole" src="<?php echo get_template_directory_uri() . '/img/boussole.jpg'; ?>" alt="Image d'une boussole qui montre la recherche de son chemin" />
                    </div>
                    <div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="date">Date de création : <?php echo get_the_date(); ?></p>
                        <div class="avatar_auteur">
                            <div class="avatar">
                                <?php $author_id = get_the_author_meta('ID'); echo get_avatar($author_id, 10); ?>
                            </div>
                            <p class="auteur1">
                                <?php echo get_field('nom_de_auteur'); ?>
                            </p>
                        </div>
                        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?></p>
                        <p class="lireplus lireplus-link"><a href="<?php the_permalink(); ?>">Lire plus</a></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun résultat trouvé</p>
        <?php endif; ?>
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
    .result {
        margin: 0;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 4%;
    }
    .search_p {
        font-weight: bold;
        margin-left: 30px;
    }
    .rectangle-search {
        /* Increase the size of the rectangle */
        width: 100%;
        height: 120px; /* Adjust the height to your preference */
        background-color: #D8BFD8;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .auteur1 {
        margin-left: 10px;
    }
    .avatar_auteur {
    display: flex;
    align-items: center; 
    }
    .avatar {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        overflow: hidden;
    }
    .card-text {
    font-size: 14px;
    }

    .lireplus-link {
    text-decoration: underline;
    cursor: pointer; 
    }

    .lireplus-link:hover {
    color: #976391;
    }
    .date {
        font-size: 11px;
        font-weight: italic;
        color: #555;
    }
    
    .img_boussole {
        width: 350px;
        height: auto;
        border-radius: 10px;
    }
    
    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
    }

    .search-container {
        margin-top: 20px;
    }

    .search-container p {
        font-size: 18px;
        font-weight: bold;
    }

    .search-form {
        margin-top: 10px;
    }

    .search-results {
        margin-top: 20px;
    }

    .card {
        display: grid;
        grid-template-columns: 1fr auto;
    }

/* Ajoutez d'autres styles au besoin */
</style>
