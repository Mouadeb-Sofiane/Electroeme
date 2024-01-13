<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>        
  <div class="wrap">
    <header>
        <div class="header-top">
            <div>
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/icon/logo.svg" alt="Logo" class="logo">
                </a>
            </div>
            <div class="menu">    
                <?php wp_nav_menu( 
                    array( 
                        'theme_location' => 'header-menu' ,
                        ) 
                    ); 
                ?>
            </div>
        </div>
    </header>
</div>

<style>
    .logo {
        width: 60px;
    }

    .header-top {
        display: flex;
        justify-content: space-between;
        font-size: 16px;
    }

    .menu {
        display: flex;
        list-style: none;
    }

    .main-nav ul {
        display: flex;
        list-style: none;
    }

    .main-nav ul li {
        margin-left: 30px; /* Augmente la marge à gauche */
        margin-right: 30px; /* Augmente la marge à droite */
    }

    .main-nav ul li a {
        text-decoration: none;
        color: #FFFFFF;
    }
</style>

