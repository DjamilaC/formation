<?php
abstract class Joueur  
{
    public function seConnecter()
    {
        return $this->EtreMajeur();
    }
    abstract public function EtreMajeur();
    abstract public function Devise();
}
//---------------------------------
// $test = new Joueur; /!\erreur!!! une classe abstraite n'est pas instanciable
class JoueurFr extends Joueur
{
    public function EtreMajeur()
    {
      return 18;  
    }
    public function Devise()
    {
        return '€';
    }
    
}
//-----------------------------------------
// Exo: créer un objet joueurFr et afficher les méthodes contenu dans les classes
$joueurFr1 = new JoueurFr;
echo "l'age pour avoir acces au site est: " .$joueurFr1->EtreMajeur() .'<hr>';
echo " La devise est: " .$joueurFr1->Devise() .'<hr>' ;

// Exo: créer une classe 'JoueurUs' qui hérite de la classe 'joueur' et réaliser le traitement permettant d'afficher '21' pour la méthode'EtreMajeur' et afficher '$' pour la devise
class JoueurUs extends Joueur
{
    public function EtreMajeur()
    {
      return 21;  
    }
    public function Devise()
    {
        return '$';
    } 
}
$joueurUs1 = new JoueurUs;
echo "l'age pour avoir acces au site est: " .$joueurUs1->EtreMajeur() .'<hr>';
echo " La devise est: " .$joueurUs1->Devise() .'<hr>' ;

/*
    - une classe abstraite n'est pas instanciable
    - les méthodes abstraites n'ont pas de contenu
    - lorsque l'on hérite de methodes abstraites, nous sommes obligé de les redéfinir
    - Pour définir des méthodes abstraites, il est nécessaire que la clase qui les contiennent.

     Le développeur qui écrit la classe 'Joueur' est au coeur de l'application (noyau) et va obliger les autres développeurs ) redéfinir les méthodes EtreMajeur() et Devise().
    C'est une bonne méthodologie de travail. On impose de bonne contraintes.
*/