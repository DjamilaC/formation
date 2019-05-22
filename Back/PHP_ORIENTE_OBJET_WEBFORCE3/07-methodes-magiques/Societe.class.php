<?php
class Societe 
{
    public $adresse;
    public $ville;
    public $cp;

    public function __set($nom, $valeur)
    {
        echo "<hr>La proprieté <strong>$nom</strong> n'a pas été déclarée, la valeur <strong>$valeur</strong> n'a pas été déclarée!! <hr> ";
    }
    // __set() est une méthode magique qui se déclenche uniquement en cas de tentative d'affectation sur une propriété qui n'existe pas
    public function __get($nom)
    {
        echo "La proprieté <strong>$nom</strong> n'a pas été déclarée, on ne peut donc pas l'afficher!! <hr> ";
    }
    // __get() est une méthode magique qui se déclenche dans le cas où l'on tente d'afficher une propriété qui n'a pas été déclarée
    public function __call($nom, $argument)
    {
        echo "La méthode <strong>$nom</strong> n'a pas été déclarée, les arguments etaient <strong>" .implode("-", $argument). "</strong><hr>"; 
    }
    //__call() est une methode magique qui s'execute automatiquement en cas de tentative d'execution d'une méthode qui n'a pas été déclarée
}





$societe = new Societe;

$societe->villes = "Paris";// tentative d'affectation d'une propriété qui n'a pas été déclarée.
echo '<pre>'; print_r($societe); echo'</pre>';

echo $societe->titre;// tentative d'affichage d'une proprieté qui n'a pas été déclarée.

echo $societe->hghgd(1, 'test', true);// tentative d'execution d'une methode qui n'a pas été déclarée
echo '<pre>'; print_r($societe); echo'</pre>';
/*
 il ya trop d'erreurs 'sale' en PHP, les méthodes magiques permettent d'afficher des erreurs 'propres' en francais
*/