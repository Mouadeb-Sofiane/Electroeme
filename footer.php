<footer>
  
  <br>
  
  <div class="section">
    <h2>Electroeme</h2>
    <ul class="thin">
      <li><a class="thin" href="https://electroeme.com/nous-soutenir/">Poèmes</a></li>
      <li><a class="thin" href="https://electroeme.com/apprendre/">Leçons</a></li>
      <li><a class="thin" href="https://electroeme.com/community/">Forum</a></li>
    </ul>
  </div>

  <div class="section">
    <h2>A propos</h2>
    <ul class="thin">
      <li><a class="thin" href="https://electroeme.com/page-a-propos/">Page à propos</a></li>
      <li><a class="thin" href="#">Nous contacter</a></li>
      <li><a class="thin" href="https://electroeme.com/nous-soutenir/">Nous soutenir</a></li>
    </ul>
  </div>

  <div class="section">
    <h2>Nous suivre</h2>
    <div>
      <a href="https://www.youtube.com/@Electroeme-Lapoesiequonaime"><img src="<?php echo get_template_directory_uri() . '/icon/youtube1.png'; ?>" alt="Icon youtube qui redirige vers notre youtube" /></a>
      <a href="https://www.instagram.com/electroeme_p/"><img src="<?php echo get_template_directory_uri() . '/icon/insta1.png'; ?>" alt="Icon Instagram qui redirige vers notre Instagram" /></a>
      <a href="https://www.tiktok.com/@electroeme_p"><img src="<?php echo get_template_directory_uri() . '/icon/tiktok1.png'; ?>" alt="Icon TikTok qui redirige vers notre TikTok" /></a>
    </div>
  </div>
  <p class="brbr"></p>

  <div class="container1">
    <div class="row1">
      <div class="col-md-5">
        <?php

        wp_footer();
        wp_nav_menu ( array (
            'footer' => 'Menu footer'
        ) ); ?>
      </div>
    </div>
  </div>
</footer>
<style>
    menu {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 16px;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    .thin {
      decoration: none;
      font-weight: 100;
    }
    footer {
      background-color: #D8BFD8;
      color: #000;
      padding: 20px;
      text-align: center;
    }

    .section {
      display: inline-block;
      margin: 0 20px;
      vertical-align: top;
    }

    h2 {
      font-weight: bold;
    }

    ul {
      list-style: none;
      padding: 0;
    }


    img {
      width: 30px; /* Ajuster la taille des images selon vos besoins */
      margin-right: 5px;
    }

    .container1 {
    margin: 0 auto;
    }

    .row1 {
    display: flex;
    justify-content: space-between;
    }

    .col-md-5 {
    width: 100%;
    }

    a{
      decoration: none;
      font-weight: 100;
    }
    
</style>

