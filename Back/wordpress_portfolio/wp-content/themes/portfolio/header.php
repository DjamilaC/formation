<!DOCTYPE html>
<html <?php language_attributes(); // fonction wordpress qui retourne la langue du site?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- link CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css"> <!--bloginfo('template_directory'), fonctio wordpress qui retourne l'URL du themeportfolio--> 

    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Link google font -->
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marcellus|Monoton" rel="stylesheet">
      <!-- link googlefonts -->
      <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); //wp_head() charge des fichiers indispensables à wordpress(fichierjs, css, stc...) et permet de recuperer la sidebar noire en haut de la page ?>


</head>
<body <?php body_class(); // appel à des classes wordpress ?>>

<div class="conteiner-fluid px-0">

    <div class="d-flex">        

        <div class="col-md-4 hauteur">
            <!-- dynamic_sidebar() est une foction wordpress qui va permettre de faire appel à des regions que l'on a cr"e dans le fichier functions -->
            <?php dynamic_sidebar('haut-gauche')?>
        </div>

        <div class="col-md-4 hauteur">
            <?php dynamic_sidebar('haut-centre')?>
        </div>

        <div class="col-md-4 hauteur">
            <?php dynamic_sidebar('haut-droite')?>
        </div>

    </div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        
        
  <a class="navbar-brand" href="#"><?php bloginfo('name');?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
        <?php wp_nav_menu(array('container_class' => 'menu_header', 'theme_location' => 'primary'))?>
        <!-- wp_nav_menu() fonction wordpress qui permet d'importer le menu principal que l'on a crée dans le fichier functions.php
         container_class' => 'menu_header': le menu aura comme class 'menu-header'
         'theme_location' => 'primary' : permet de préciser que c'est le menu principal 
    -->
      
    
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search">
    </form>
  </div>
</nav>

    <div class="col-md-12 px-0 h-entetes">
            <?php dynamic_sidebar('haut-longue')?>
    </div>

</div>
<section class="ma-section">
















