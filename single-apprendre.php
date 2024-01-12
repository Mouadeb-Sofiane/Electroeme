<?php get_header(); ?>
<p class="br1"></p>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div>
      <div>
        <div class="img-container">
          <img class="img_boussole" src="<?php echo get_template_directory_uri() . '/img/img_figure_de_style2.png'; ?>" alt="Image d'une main qui écrit avec un stylo" />
          <h1 class="image_text"><?php the_title(); ?></h1>
        </div>
        <h2 class="title1"><?php the_field("titre_de_la_lecon"); ?></h2>
        
        <div class="img_correspondance">
              <?php
                $image_id = get_field('image_de_correspondance'); // Récupérez l'ID de l'image à partir du champ ACF

                // Vérifiez si l'ID de l'image est disponible
                if ($image_id) {
                    // Obtenez l'URL de l'image en fonction de l'ID
                    $image_url = wp_get_attachment_url($image_id);
                    
                    // Affichez l'image
                    echo '<img src="' . esc_url($image_url) . '" alt="Image de correspondance">';
                }
                ?>
        </div>
          <h2 class="title"><?php the_field("Premier_titre"); ?></h2>
            <div class="div_paragraphe">
              <div class="para"><?php the_field("premier_paragraphe"); ?></div>
              <img class="img2" src="<?php echo get_template_directory_uri() . '/img/Object.png'; ?>" alt="Image d'une plume." />
            </div>
            <div>
              <?php if (get_field("titre_du_paragraphe_copier")) : ?>
                <h2 class="title"><?php the_field("titre_du_paragraphe_copier"); ?></h2>
              <?php endif; ?>
            </div>
                            <div class="group">
                            <?php if (get_field("sous-titre")) : ?>
                              <div class="iconn">
                                <p class="icon">A</p>
                                <h3 class="subtitleA">
                                  <?php the_field("sous-titre"); ?>
                                </h3>
                              </div>
                              <div class="div_paragraphe">
                                <p class="paragraphe"><?php the_field("paragraphe_1"); ?></p>
                                <p class="exemple"><?php the_field("exemple"); ?></p>
                              </div>
                            </div>
                            <?php endif; ?>
                          </div>
                            <div class="group">
                              <?php if (get_field("sous-titre_2")) : ?>
                                <div class="iconn">
                                  <p class="icon">B</p>
                                  <h3 class="subtitleA">
                                    <?php the_field("sous-titre_2"); ?>
                                  </h3>
                                </div>
                                <div class="div_paragraphe">
                                  <p class="paragraphe"><?php the_field("paragraphe_2"); ?></p>
                                  <p class="exemple"><?php the_field("exemple2"); ?></p>
                                </div>
                              </div>
                              <?php endif; ?>
                            </div>
                            <div class="group">
                              <?php if (get_field("sous-titre_3")) : ?>
                                <div class="iconn">
                                  <p class="icon">C</p>
                                  <h3 class="subtitleA">
                                    <?php the_field("sous-titre_3"); ?>
                                  </h3>
                                </div>
                                <div class="div_paragraphe">
                                  <p class="paragraphe"><?php the_field("paragraphe_3"); ?></p>
                                  <p class="exemple"><?php the_field("exemple3"); ?></p>
                                </div>
                              </div>
                              <?php endif; ?>
                            </div>
                            <div class="group">
                              <?php if (get_field("sous-titre_4")) : ?>
                                <div class="iconn">
                                  <p class="icon">D</p>
                                  <h3 class="subtitleA">
                                    <?php the_field("sous-titre_4"); ?>
                                  </h3>
                                </div>
                                <div class="div_paragraphe">
                                  <p class="paragraphe"><?php the_field("paragraphe_4"); ?></p>
                                  <p class="exemple"><?php the_field("exemple4"); ?></p>
                                </div>
                              </div>
                              <?php endif; ?>
                            </div>
                            <div class="group">
                              <?php if (get_field("sous-titre_5")) : ?>
                                  <div class="iconn">
                                    <p class="icon">E</p>
                                    <h3 class="subtitleA">
                                      <?php the_field("sous-titre_5"); ?>
                                    </h3>
                                  </div>
                                  <div class="div_paragraphe">
                                    <p class="paragraphe"><?php the_field("paragraphe_5"); ?></p>
                                    <p class="exemple"><?php the_field("exemple5"); ?></p>
                                  </div>
                              </div>
                              <?php endif; ?>
                            </div>
                                <div class="group">
                                  <?php if (get_field("sous-titre_6")) : ?>
                                      <div class="iconn">
                                        <p class="icon">F</p>
                                        <h3 class="subtitleA">
                                          <?php the_field("sous-titre_6"); ?>
                                        </h3>
                                      </div>
                                      <div class="div_paragraphe">
                                        <p class="paragraphe"><?php the_field("paragraphe_6"); ?></p>
                                        <p class="exemple"><?php the_field("exemple6"); ?></p>  
                                      </div>
                                  </div>
                                  <?php endif; ?>
                                </div>
                  <div>
                    <?php if (get_field("second_titre")) : ?>
                      <h2 class="title"><?php the_field("second_titre")?></h2>
                    <?php endif; ?>
                  </div>
                    <div class="group">
                      <?php if (get_field("sous-titre7")) : ?>
                        <div class="iconn">
                          <p class="icon">G</p>
                          <h3 class="subtitleA">
                            <?php the_field("sous-titre7"); ?>
                          </h3>
                        </div>
                        <div class="div_paragraphe">
                          <p class="paragraphe"><?php the_field("paragraphe_7"); ?></p>
                          <p class="exemple"><?php the_field("exemple7"); ?></p>  
                        </div>
                      </div>
                      <?php endif; ?>
                    </div>
                      <div class="group">
                        <?php if (get_field("sous-titre8")) : ?>
                          <div class="iconn">
                            <p class="icon">H</p>
                            <h3 class="subtitleA">
                              <?php the_field("sous-titre8"); ?>
                            </h3>
                          </div>
                          <div class="div_paragraphe">
                            <p class="paragraphe"><?php the_field("paragraphe_8"); ?></p>
                            <p class="exemple"><?php the_field("exemple8"); ?></p>
                          </div>
                        </div>
                        <?php endif; ?>
                      </div>
                      <div class="group">
                        <?php if (get_field("sous-titre9")) : ?>
                          <div class="iconn">
                            <p class="icon">I</p>
                            <h3 class="subtitleA">
                              <?php the_field("sous-titre9"); ?>
                            </h3>
                          </div>
                          <div class="div_paragraphe">
                            <p class="paragraphe"><?php the_field("paragraphe_9"); ?></p>
                            <p class="exemple"><?php the_field("exemple9"); ?></p>
                          </div>
                        </div>
                        <?php endif; ?>
                      </div>
                      <div class="group">
                        <?php if (get_field("sous-titre10")) : ?>
                          <div class="iconn">
                            <p class="icon">J</p>
                            <h3 class="subtitleA">
                              <?php the_field("sous-titre10"); ?>
                            </h3>
                          </div>
                          <div class="div_paragraphe">
                            <p class="paragraphe"><?php the_field("paragraphe_10"); ?></p>
                            <p class="exemple"><?php the_field("exemple10"); ?></p>
                          </div>
                        </div>
                        <?php endif; ?>
                      </div>
                      <div class="group">
                        <?php if (get_field("sous-titre11")) : ?>
                            <div class="iconn">
                                <p class="icon">K</p>
                                <h3 class="subtitleA">
                                    <?php the_field("sous-titre11"); ?>
                                </h3>
                            </div>
                            <div class="div_paragraphe">
                                <p class="paragraphe"><?php the_field("paragraphe_11"); ?></p>
                                <p class="exemple"><?php the_field("exemple11"); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                            <div class="group">
                              <?php if (get_field("sous-titre12")) : ?>
                                <div class="iconn">
                                  <p class="icon">L</p>
                                  <h3 class="subtitleA">
                                    <?php the_field("sous-titre12"); ?>
                                  </h3>
                                </div>
                                <div class="div_paragraphe">
                                  <p class="paragraphe"><?php the_field("paragraphe_12"); ?></p>
                                  <p class="exemple"><?php the_field("exemple10_copier2"); ?></p>
                                </div>
                              </div>
                              <?php endif; ?>
                            </div>
                             <div>
                                <?php if (get_field("astuce")) : ?>
                                    <h2 class="astuce">
                                            Astuce
                                    </h2>
                                <?php endif; ?>
                              </div> 

                              <div>
                              <?php if (get_field("astuce_copier")) : ?>
                                <div class="paragraphe2"><?php the_field("astuce_copier"); ?></div>
                                <h2 class="title">Pour aller plus loin</h2>
                                <p class="paragraphe2">Decouvrez des leçons en ligne disponibles sur YouTube pour en apprendre plus et réviser en toute tranquilité.</p>
                                
                                <div class="video">
                                    <video width="640" height="360" controls>
                                        <source src="<?php echo esc_url(get_field('video1')); ?>" type="video/mp4">
                                        Votre navigateur ne supporte pas la balise vidéo.
                                    </video>
                                </div>
                                <div class="video_link">
                                  <p>Si la vidéo ne se lance pas voici son lien:</p>
                                  <?php the_field("video1"); ?>
                                </div>
                                <?php endif; ?>
                              </div>
                                <div class="auteur">
                                  <p><?php the_field("auteur"); ?></p>
                                </div>
                          </div>
                  <div>
                    <div>
                        <?php
                            $args = array(
                                'post_type' => 'apprendre', // Le CPT agence
                                'meta_query' => array(
                                    array(
                                        'key' => 'apprendre', // Nom du champ relationnel
                                        'value' => '"' . get_the_ID() . '"', // recherche exacte de l'ID
                                        'compare' => 'LIKE'
                                    )
                                )
                            );

                            $apprendre = new WP_Query($args);
                            if ($apprendre->have_posts()) :
                                // Affichez ici les détails supplémentaires si nécessaire
                            endif;
                            wp_reset_postdata();
                        ?>
                    </div>
                      <?php endwhile; ?>
                      <?php endif; ?>
                  </div>
                  
</div>
</div>
</div>

<div>
    <h2 class="title">Les leçons pourraient vous intéresser</h2>
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
                        <?php if (get_field('image_de_correspondance')) : ?>
                            <?php $image_url = get_field('image_de_correspondance'); ?>
                            <img class="card-image" src="<?php echo $image_url; ?>" alt="Image mise en avant pour le poème" />
                        <?php endif; ?>
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



<p class="br"></p>
                  
<?php get_footer(); ?>

<style>
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
  .auteur {
    margin-left: 90%;
    font-size: 13px
  }
      .img_correspondance {
        width: 50%;
        margin-left: 25%;
        margin-bottom: 5%;
      }
      .br1 {
        margin-bottom: 35px;
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
    
    body {
      font-family: 'Poppins', sans-serif;
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

    .astuce {
      font-size: 20px;
      font-weight: bold;
      background-color: #DEA966; /* Couleur de fond du rectangle */
      padding: 10px 30px; /* Espace intérieur du rectangle, 10px en haut et en bas, 30px à gauche et à droite */
      border-radius: 30px; /* Rayon des coins pour des bords arrondis */
      display: inline-block; /* Permet au fond de s'ajuster à la largeur du texte */
      margin-left: 3%;
    }


    .title1 {
      font-weight: bold;
      text-align: left;
      font-size: 30px;
      text-decoration: underline;
      margin-top: 5%;
      margin-bottom: 2%;
      margin-left: 5%;
    }

    .group {
      margin-bottom: 3%;
    }

    .iconn {
    display: flex;
    align-items: center;
    margin-left: 5%;
    }

    .icon {
        background-color: #DEA966;
        color: #000;
        border-radius: 50%;
        width: 50px;
        font-size: 36px;
        padding: 5px;
        text-align: center;
    }

    .subtitleA {
        margin-left: 2%;
        flex: 1; /* Faites en sorte que le sous-titre prenne toute la largeur restante */
    }

    .div_paragraphe {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin: 0 auto;
    }

    .paragraphe   {
    width: 50%;
    margin-left: 11%;
    }

    .paragraphe2   {
    width: 50%;
    margin-left: 8%;
    margin-bottom: 5%;
    }

    .exemple {
    width: 30%;
    }
    .img2 {
    width: 8%;
    margin-right: 15%;
  }
  .para {
    margin-left: 7%;
    margin-bottom: 3%;
    width: 60%;
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

    .video{
        width: 70%;
        height: auto;
        margin: auto; /* Centrer horizontalement */
        display: flex;
        justify-content: center;
        align-items: center; /* Centrer verticalement */
    }
    .video_link {
        text-align: center;
        margin-bottom: 5%;
        margin-top: 5%;
    }
    .img_boussole {
        width: 100%;
        height: auto;
    }
</style>
