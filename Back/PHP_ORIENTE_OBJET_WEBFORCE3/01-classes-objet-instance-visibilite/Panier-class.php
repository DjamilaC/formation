<?php
// Par convention la premère lettre de la classe doit être en majuscule

class Panier 
{
    public $nbProduits;
    public function ajouterArticle()
    {
        return "l'article a été ajouté!!";
    }
    protected function retirerArticle() // proteger les données
    {
        return "l'article a été retiré!!"; 
    }
    private function affichageArticle()
    {
        return "voici les articles!!";
    }
}

$panier1 = new Panier;
echo '<pre>'; var_dump($panier1); echo '</pre>'; // on observe un objet issu de la classe 'Panier' à l'identifiant '#1' (référence de l'objet), il peut y avoir plusieurs objets conservé en RAM, ils auront tous un identifiant different
echo '<pre>'; var_dump(get_class_methods($panier1)); echo'</pre>'; // permet d'observer uniquement les methodes (fonctions) publiques issu de la classe

// Exo : affecter la valeur de '5' à la proprieté public '$nbProduit'

$panier1->nbproduits = 5;// on affecte la valeur 5 à la proprieté (variable) $nbProduits, jamais le signe '$' lorsqu'on appelle une proprieté public de l'objet
echo '<pre>'; print_r($panier1); echo '</pre>';
echo "Nombre de produit dans le panier : ".$panier1->nbproduits . "<hr>"; 
echo "Panier1> : ".$panier1->ajouterArticle() . "<hr>"; // on pioche une méthode de la classe à travers l'objet, toujours des parenthèses car on fait appel à une méthode(fonction) / méthode public 
// echo "Panier1> : ".$panier1->retirerArticle() . "<hr>"; /!\ ERREUR !!! méthode protected !! l'élemenent est accessible uniquement dans la classe où ce la a été déclarée (class Mère) ainsi que dans les classes héritieres 
// echo "Panier1> : ".$panier1->affichageArticle() . "<hr>";  /!\ ERREUR !!! méthode private !! l'élemenent est accessible uniquement dans la classe où cela a été déclarée (class Mère).
// le niveau de visibilité permettent de protéger les données, par exemple les données saisies d'un formulaire ne pourront pas être attribués à n'importe quelle propriété déclarée, elles passeront par des méthodes de contrôler ces données

$panier2 = new Panier;
echo '<pre>'; var_dump($panier2); echo '</pre>';

// Exo: affecter 3 produits à la propriété $nbProduits et afficher le nombre de produits dans le panier
$panier2->nbproduits = 3;
echo '<pre>'; print_r($panier2); echo '</pre>';
echo "Nombre de produit dans le panier : ".$panier2->nbproduits . "<hr>";
/*
Niveau de visibilité
    - public : accessible de partout
    - protected : accessible dans la classe mère et héritières
    - private : accessible uniquement dans la classe Mère
'new' est un mot clé permettant d'effectuer un e instanciation (créer un objet)
une classe peut produire plusieurs objets
$panier1 représente l'objet issu de la classe 'Panier'
La classe est le plan de construction / $ panier1 représente un exemplaire de la classe
*/