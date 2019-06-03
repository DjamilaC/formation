<?php
class Vehicule
{
    private static $marque = 'BMW';
    private $couleur = 'noir';
    public static function setMarque($marque)
    {
         self::$marque = $marque;
    }
    public static function getMarque()
    {
        return self::$marque;
    }
    // ---------------------------------------
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
}
// Exo : créer un objet issu de la classe vehicule et faites une phrase en affichant la couleur et la marque du véhicule
 $vehicule1 = new Vehicule;
 echo "La couleur du vehicule1 est de couleur: <strong>" .$vehicule1->getCouleur() ."</strong>". " et de marque <strong>". Vehicule::getMarque(). "</strong><hr>";

 // Exo: créer un autre vehicule et changer la couleur par violet et faite une phrase en affichant la couleur et la marque

 $vehicule2 = new Vehicule;
 $vehicule2->setCouleur("violet");
 echo "La couleur du vehicule2 est de couleur: <strong>" .$vehicule2->getCouleur() ."</strong>". " et de marque <strong>".Vehicule::getMarque() . "</strong><hr>";

 // Exo: créer un vehicule 3 et faites une phrase en affichant la couleur et la marque du vehicule
 $vehicule3 = new Vehicule;
 echo "La couleur du vehicule3 est de couleur: <strong>" .$vehicule3->getCouleur() ."</strong>". " et de marque <strong>".Vehicule::getMarque() . "</strong><hr>";

 // Exo: modifier la marque par Mercedes, puis crer le vehicule 4 et afficher la phrase en affichant la couleur et la marque du vehicule
 
 Vehicule::setMarque("Mercedes");
 $vehicule4 = new Vehicule;

 echo "La couleur du vehicule4 est de couleur: <strong>" .$vehicule4->getCouleur() ."</strong>". " et de marque <strong>".Vehicule::getMarque() . "</strong><hr>";
 $vehicule5 = new Vehicule;
 echo "La couleur du vehicule5 est de couleur: <strong>" .$vehicule5->getCouleur() ."</strong>". " et de marque <strong>".Vehicule::getMarque() . "</strong><hr>";

/*
    un élément déclaré comme 'static' appartient à la classe et non à l'objet
    si je modifie un élément 'static', je modifie la classe elle meme
    $objet->elément d'un objet à l'exterieur de la classe   
    $this->elément d'un objet à l'interieur de la classe   
    class::elément de la classe à l'exterieur de la classe   
    self::elément de la classe à l'interieur de la classe   
*/