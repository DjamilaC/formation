<?php
class Etudiant
{
    private $prenom;
    public function __construct($arg)
    {
        echo "Instanciation, nous avons reçu l'information suivante : $arg <br>";
        return $this->setPrenom($arg);
    }
    // Exo : réaliser le getteur et setteur pour la proprieté $prenom
    public function setPrenom($prenom)
    {
        if(is_string($prenom))
        {
            $this->prenom = $prenom;            
        }
        else
        {
            return "ce n'est pas un string !!";
             
        }
    }
    public function getPrenom() // un getteur ne reçoit jamais d'argument
    {
        return $this->prenom;
    }
}
//---------------------------------------------
$etudiant = new Etudiant('Djamila');
echo '<pre>'; var_dump($etudiant); echo '</pre>';
echo "Mon prénom est : " .$etudiant->getPrenom(). '<hr>';
echo $etudiant->setPrenom(28); // on tombe dans le else / affichage du message d'erreur
$etudiant->__construct('Djamila'); // le constructeur peut tout de meme être apellé comme une méthode classique

 



// $bdd = new PDO('coordonnee de la BDD)

/* 
__construct() est une méthode magique qui s'execute automatiquement lorsque l'on instancie la classe. Elle sera l'equivalent du init.php avec session_start(), connexion BDD, autoload etc... 
- new Etudiant('Djamila') -> A l'instanciation de la classe, 'Djamila' va automatiquement se stocker en argument de la méthode magique __construct()
etteur : permet de contrôler les données
getteur : permet de voir / exploiter les données finales
private $prénom : la propriété est privée afin que l'on ne puisse pas la remplir de l'exterieur de la classe sans avoir fait de controles au préalable,
c-à-d sans etre passé par le setteur et le getteur.
si nous avons un formulaire avec 10 champs on aura-->10 setteurs et 10 getteurs
*/