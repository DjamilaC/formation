<?php

/*
    UML 

----------------------
| Vehicule           |    1. Création d'un véhicule 1
----------------------    2. Attribuer un nombre de litres d'essence au véhicule 1 : 5l
| $litresEssence     |    3. Afficher le nombre de litres d'essence du véhicule 1
----------------------    4. Création d'une pompe
| setLitresEssence() |    5. Attribuer un nombre de litres d'essence à la pome : 800
| getLitresEssence() |    6. Afficher le nombre de litres d'essence de la pompe
----------------------    7. la pompe donné de l'essence en faisant le plein (50L)
                             à la voiture 1
----------------------    8. Afficher le nombre de litres d'essence de la voiture aprés
| Pompe              |       ravitaillement
----------------------    9. Afficher le nombre de litres restant à la pompe
| $litresEssence     |      
----------------------    public function donnerEssence(Vehicule $v)   
| setLitresEssence() |
| getLitresEssence() |
| donnerEssence()    |
----------------------
*/
class Vehicule
{
    private $litresEssence;
    public function setLitresEssence($litresEssence)
    {
        $this->litresEssence = $litresEssence;
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    } 

}

//----------------class POMPE-----------------

class Pompe 
{
    private $litresEssence;
    public function setLitresEssence($litresEssence)
    {
        $this->litresEssence = $litresEssence;
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }
                                // $vehicule1
    public function donnerEssence(Vehicule $v)// on exige un argument de type 'vehicule', c'est à dire un objet issu de la classe 'Vehicule
    {
    //    return $this->litresEssence;
    echo '<pre>'; var_dump($v); echo '</pre>';
    $this->setLitresEssence($this->getLitresEssence() - (50 - $v->getLitresEssence()));
    $v->setLitresEssence($v->getLitresEssence() + (50 - $v->getLitresEssence()));
    }

}

$vehicule1 = new Vehicule;
$vehicule1->setLitresEssence(5);
echo " Le Nombre de litres d'essence du véhicule1 est  : ".$vehicule1->getLitresEssence() . "<hr>";

$pompe1 = new Pompe;
$pompe1->setLitresEssence(800);
echo " Le Nombre de litres d'essence à la pompe est  : ".$pompe1->getLitresEssence() . "<hr>";
$pompe1->donnerEssence($vehicule1);
echo "Nombre de litres d'esence à la pompe: ".$pompe1->getLitresEssence().' litres<hr>';
echo "Nombre de litres d'esence pour le vehicule: ".$vehicule1->getLitresEssence().' litres<hr>';



