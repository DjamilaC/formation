<?php
namespace General;

require_once('namespace_commerce.php');

USE Commerce1, Commerce2, Commerce3; // permet de préciser quel namespace je souhaite importer du fichier namespace_commerce.php 

echo '<hr>'. __NAMESPACE__ . '<hr>'; // constante magique qui permet d'afficher dans quel namespace on se trouve

$std = new \StdClass(); // sans le anti-slash --> erreur !! l'Interpreteur va chercher si la méthode StdClass() est déclarée dans le namespace 'General', donc pour revenir dans l'espace global de php le temps de ligne, nous devons mettre un anti-slash '\' devant la class
var_dump($std);

$commande = new Commerce1\Commande;
// $commande = new nom_du_namespace\nom_de_la_classe

var_dump($commande);
echo "Nombre de commande: " . $commande->nbCommande . '<hr>';
// var_dump($commande);

// Exo: créer un objet de toutes les classes déclarées et faire les affichages des proprietés

$produit = new Commerce2\Produit;
echo "Nombre de produits: " . $produit->nbProduit . '<hr>';
// var_dump($produit);

$produit = new Commerce3\Produit;
echo "Nombre de produits: " . $produit->nbProduit . '<hr>';
// var_dump($produit);

$panier = new Commerce3\Panier;
echo "Nombre de produits: " . $panier->nbProduit . '<hr>';
// var_dump($produit);