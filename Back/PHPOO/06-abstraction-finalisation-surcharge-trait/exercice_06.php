<?php
abstract class Vehicule 
{
    public function demarrer()
    {
        return "je demarre<hr>";
    }
    abstract public function carburant();
    
    public function nombreDeTestObligatoire()
    {
        return 100;
    }
}
//----------------------------------------------
 class Peugeot extends Vehicule
{
  public function carburant()
    {
        return "essence" ;
    }
    public function nombreDeTestObligatoire()
    {
        $resultat = parent::nombreDeTestObligatoire();
        return $resultat + 70;
    }  
}
//---------------------------------------------
 class Renault extends Vehicule
{
    public function carburant()
    {
        return "Diesel" ;
    }
    public function nombreDeTestObligatoire()
    {
        $resultat = parent::nombreDeTestObligatoire();
        return $resultat + 30;
    }  

}
//----------------------------------------------
/*
    1. Faire en sorte de ne pas avoir d'objet vehicule.
    2. Obligation pour la renaut et la Peugeot de posseder la même méthode demarrer.
    3. Obligatoire pour la Renault de déclarer un carburant 'diesel' et pour la peugeot un carburant 'Essence'
    4. La Renault doit faire 30 tests de plus qu'un véhicule de base.
    5. La Peugeot doit faire 70 tests de plus qu'un véhicule de base.
    6. Effectuer les affichages nécessaires.
*/
$peugeot1 = new Peugeot;
echo $peugeot->demarrer();
// echo '<pre>'; var_dump(get_class_methods($peugeot1));echo'</pre>';
echo "La peugeot consomme du : ".$peugeot1->carburant() .'<hr>';
$renault1 = new Renault;
// echo '<pre>'; var_dump(get_class_methods($renault1));echo'</pre>';
echo "La renault consomme du : ".$renault1->carburant().'<hr>';