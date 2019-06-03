<?php
class Ecole 
{
    public $nom = "POLES";
    public $cp = 94;
    public function __clone()
    {
        $this->cp = 92;
    }
}
//--------------------------------------------------------------------
$ecole1 = new Ecole;
$ecole1->cp = 75;
echo '<pre>'; var_dump($ecole1); echo'</pre>';

$ecole2 = new Ecole;
echo '<pre>'; var_dump($ecole2); echo'</pre>';

$ecole3 = $ecole1;
// lorsque je modifie $ecole1 cela prend effet sur $ecole3 et vis-e-versa, $ecole1 et $ecole3 ont des references qui pointes vers le même objet #1. ils representent le même objet
echo '<pre>'; var_dump($ecole3); echo'</pre>';

$ecole3->cp = 91;
echo "Ecole1 > ".$ecole1->cp . '<hr>';
echo "Ecole3 > ".$ecole3->cp . '<hr>';

$ecole4 = clone $ecole2;
echo '<pre>'; var_dump($ecole4); echo'</pre>';
echo '<pre>'; var_dump($ecole2); echo'</pre>';

echo "Ecole2 > ".$ecole2->cp . '<hr>';
echo "Ecole4 > ".$ecole4->cp . '<hr>';
// __clone() s'execute lorsque l'on 'clone' un objet. cela crée un nouvel objet avec une nouvelle référence(#3).
// si nous avions 2 classes quasiment identiques, nou privilegerions le clonage et apporter une modification au comportement de la classe





