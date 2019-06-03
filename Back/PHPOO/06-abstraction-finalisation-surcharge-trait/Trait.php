<?php
 trait TPanier 
 {
     public $nbProduit = 1;
     public function affichageProduit()
     {
         return "Affichage des produits !! <hr>";
     }
 }
 //---------------------------------------------------------------
 trait TMembre 
 {
     public $nbProduit = 1;
     public function affichageMembres()
     {
         return "Affichage des membres !! <hr>";
     }
 }
 //---------------------------------------------------------------
 class Site 
 {
     USE TPanier, TMembre;
 }
 //---------------------------------------------------------------
// Exo : créer un objet issu de la classe 'Site' et afficher les méthodes issu de cette classe
// Et faire les différents affichage des méthodessdéclarées
 $site1 = new Site;
 echo '<pre>'; var_dump(get_class_methods($site1));echo'</pre>';
 echo $site1->affichageProduit();
 echo $site1->affichageMembres();
 echo "Nombre de produits dans le panier est: ". $site1->nbProduit;
 /*
    les traits ont été inventé pour repousser les limites de lh'héritage. il est possible pour une classe d'heriter de plusieurs trais en même temps
    un trait est un regroupement de méthodes et proprietés pouvant être importé dans une classe
 */