<?php
add_action('widgets_init', 'portfolio_init_sidebar'); // on crée un 'hook', c'est à dire qu'on accroche une fonction de wordpress pour pouvoir s'en servir
// widgets_init-> fonction wordpress
// portfolio_init_sidebar-> fonction utilisateur que l'on va déclarer ci-dessous

add_action('init', 'portfolio_init_menu'); // permet de recuperer les fonctionnalitées du menu wordpress dans le ,backoffice

// fonction permettant de créer des regions, on les retrouvent dans le backoffice de wordpress dans apparence->widgets
function portfolio_init_sidebar()
{
    register_sidebar(array(
        // register_sidebar(array() permet de créer une region que l'on retrouve ensuite dans les widgets
     'name' =>__('Haut gauche', 'Portfolio'),
     'id'   =>'haut-gauche',
     'description' =>__('Région en haut à gauche', 'Portfolio')
    ));

    register_sidebar(array(
     'name' =>__('Haut droite', 'Portfolio'),
     'id'   =>'haut-droite',
     'description' =>__('Région en haut à droite', 'Portfolio')
    ));

    register_sidebar(array(
     'name' =>__('Haut centre', 'Portfolio'),
     'id'   =>'haut-centre',
     'description' =>__('Région en haut au centre', 'Portfolio')
    ));
    
    register_sidebar(array(
     'name' =>__('Haut longue', 'Portfolio'),
     'id'   =>'haut-longue',
     'description' =>__('Région longue en haut', 'Portfolio')
    ));

    register_sidebar(array(
     'name' =>__('Bas gauche', 'Portfolio'),
     'id'   =>'bas-gauche',
     'description' =>__('Région du bas à gauche', 'Portfolio')
    ));
    
    register_sidebar(array(
     'name' =>__('Bas centre', 'Portfolio'),
     'id'   =>'bas-centre',
     'description' =>__('Région du bas au centre', 'Portfolio')
    ));

    register_sidebar(array(
     'name' =>__('Bas droite', 'Portfolio'),
     'id'   =>'bas-droite',
     'description' =>__('Région du bas à droite', 'Portfolio')
    ));

   
  


}
// Function qui permet de créer le menu principal du thème'portfolio' que nous allons positionneer dans le code
function portfolio_init_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'Portfolio'));
}



?>