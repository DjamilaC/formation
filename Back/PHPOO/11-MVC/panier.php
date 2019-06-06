<?php
session_start();

if(isset($_GET['action']) && $_GET['action'] == 'vider')
{
    unset($_SESSION['action']);
    
} 
if(isset($_GET['action']) && $_GET['action'] == 'create' || isset($_SESSION['panier']))
{
    $_SESSION['panier'] = array(26, 27, 28);
    echo "Produit present dans le panier :" . implode($_SESSION['panier'], '-') . '<hr>';
    echo '<a href="?action=vider">Vider le panier</a>';
}
else
{
    echo '<a href="?action=create">Creer le panier</a>'; 
}
/*
    Jusqu'à présent vous avez parfois eu du mal à organiser le code, ce n'est pas toujours évident de mélanger HTML & PHP

    ARCHITECTURE MVC
    1. Modèle (échange avec la BDD)
    2. View (affichage et présentation des données -  HTML / CSS)
    3. Contrôler (traitement PHP)

    le but d'une architecture MVC est de séparer les couches, c-à-d de séparer les langages au maximum
     AVANTAGES
     - clarté de l'architecture
     si le design doit changer, vous pouvez demander à l'integrateur de procéder aux mises à jour, il ne risquera pas de décapiter une accolade dans le code
     - favorise le trvail d'equipe et les m à j

     INCONVENIENTS
     - Nombre de fichiers (trop complexe pour de petites applications)
*/
