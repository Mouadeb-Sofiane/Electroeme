<form method="get" id="form" action="<?php bloginfo('url'); ?>" class="search-form">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="search-input">
    <button class="search-btn" type="submit" id="submit">
        <!-- Intégration du fichier SVG -->
        <img class="loupe" src="<?php echo get_template_directory_uri() . '/icon/rechercher.svg'; ?>" alt="Loupe">
    </button>
</form>

<style>
  .search-form {
    display: flex;
    width: 40%;
    margin: 0 auto;
  }

  .search-input {
    flex: 1;
    padding: 10px; 
    border-radius: 30px 0 0 30px; 
    border: 1px solid #D8BFD8; 
  }

  .search-btn {
    cursor: pointer;
    border-radius: 0 30px 30px 0; 
    background-color: #DEA966; 
    border: 1px solid #D8BFD8; 
    width: 7%;
  }

  .loupe {
    width: 20px;
    height: 20px;
  }
</style>
