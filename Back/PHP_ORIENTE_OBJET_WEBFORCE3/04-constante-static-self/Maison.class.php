<?php
class Maison
{
    private static $nbPiece = 7;// propriete appartient à la classe
    public static $espaceTerrain = '500m';// propriete appartient à la classe
    public $couleur = 'blanc';// appartient à l'objet
    const HAUTEUR = '10m';// propriete appartient à la classe
    private $nbPorte = '10';
    // méthode appartient à la classe
    public static function getNbPiece()
    {
        return self::$nbPiece; // self permet de faire appel à une propriete static déclarée à l'interieur de la classe
    }
    // methode qui appartient à l'objet
    public function getNbPorte()
    {
        return $this->nbPorte;
    }
    public function getEspaceTerrain()
    {
        return self::$espaceTerrain;
    }
    public function getHauteur(){
        return self::HAUTEUR;
    }
    
}

// 1 - afficher le nombre de pieces de la maison
echo "Nombre de pieces de la maison : <strong>".Maison::getNbPiece() . "</strong><hr>";// lorsqu'une methode est 'static', cela veut dire qu'elle appartient à la classe et non à l'objet, donc on l'apelle via la classe.

// 2 - Afficher l'espace terrain de la maison 
echo "L'espace terrain de la maison : <strong>".Maison::getEspaceTerrain() . "</strong><hr>";

// 3 - afficher la hauteur de la maison
echo "La hauteur de la maison : <strong>".Maison::getHauteur() . "</strong><hr>";// PDO::FETCH_ASSOC

// 4 - afficher la couleur de la maison
$maison = new Maison;
echo "La couleur de la maison : <strong>" .$maison->couleur. "</strong><hr>";

// 5 - afficher le nombre de portes de la maison
echo "Le nombre de porte de la maison : <strong>".$maison->getNbPorte() . "</strong><hr>";
// devrait donner une erreur, on ne doit pas appeler une propriete static, 
// echo $maison::$espaceTerrain . '<hr>';
// echo $maison->espaceTerrain.'<hr>';
// echo $maison->getNbPiece(). '<hr>';
echo Maison::$couleur;