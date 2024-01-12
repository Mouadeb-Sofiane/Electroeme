<?php 
  function thememonsite_setup() {
    // Ajout du support pour les images mises en avant
    add_theme_support( 'post-thumbnails' );
    // Ajout du support pour le titre du site
    add_theme_support( 'title-tag' );
    // Ajout du support pour rendre le code valide en HTML 5
    add_theme_support( 
      'html5', 
      array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption',
        'style',
        'script'
      )
    );
    // Ajout du support pour les menus
    register_nav_menus( 
      array(
        'main' => 'Menu Principal',
        'footer' => 'Menu footer'
      )
    );
  }
  add_action( 'after_setup_theme', 'thememonsite_setup' );

  function thememonsite_script() {
    // Ajout du fichier style.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // Ajout du fichier main.js
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'thememonsite_script' );



  function init_my_custom()
  {
     register_post_type(
         'aprrendre',
         array(
         'label' => 'apprendre',
         'labels' => array(
         'name' => 'apprendre',
         'singular_name' => 'apprendre',
         'all_items' => 'Toutes les cours',
         'add_new_item' => 'Ajouter un cours',
         'edit_item' => 'Éditer le cours',
         'new_item' => 'Nouveau cours',
         'view_item' => 'Voir le cours',
         'search_items' => 'Rechercher parmi les cours',
         'not_found' => 'Pas de cours trouvée',
         'not_found_in_trash'=> 'Pas de cours dans la corbeille'
         ),
         'public' => true,
         'capability_type' => 'post',
         'supports' => array(
         'title',
         'editor',
         'thumbnail'
         ),
         'has_archive' => true
         )
     );
  }
  add_action('init', 'init_my_custom');

  register_taxonomy(
    'type',
    'poemes',
    array(
      'label' => 'Types',
      'labels' => array(
      'name' => 'Types',
      'singular_name' => 'Type',
      'all_items' => 'Tous les types',
      'edit_item' => 'Éditer le type',
      'view_item' => 'Voir le type',
      'update_item' => 'Mettre à jour le type',
      'add_new_item' => 'Ajouter un type',
      'new_item_name' => 'Nouveau type',
      'search_items' => 'Rechercher parmi les types',
      'popular_items' => 'Types les plus utilisés'
    ),
    'hierarchical' => true
    )
  );

  register_taxonomy_for_object_type( 'type', 'joueurs' );


  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery-ui-core');
  wp_enqueue_script('jquery-ui-autocomplete');
  
  function custom_acf_prepare_field($field) {
    // Remplace le label du champ "Title" par "Titre"
    if ($field['label'] == 'Title') {
        $field['label'] = 'Titre principal';
    }

    return $field;
}

add_filter('acf/prepare_field', 'custom_acf_prepare_field');


function my_nav_menu_account( $items ) {
  if ( is_user_logged_in() ) {
    $user = wp_get_current_user();
    $name = $user->display_name;
    $avatar = get_avatar( $user->ID, 32 );

    // Ajouter un border radius à l'avatar pour obtenir un effet de cercle
    $avatar_with_border_radius = '<span style="display: inline-block; border-radius: 50%; overflow: hidden;width:30px; height : 30px;"">' . $avatar . '</span>';

    $items = str_replace( 'Mon compte', $avatar_with_border_radius, $items );
  }
  return $items;
}
add_filter( 'wp_nav_menu_items', 'my_nav_menu_account' );
