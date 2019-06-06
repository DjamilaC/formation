<?php
class Electricien
{
   public function getSpecialiste()
   {
       return "pose de cables, tableaux ou armoires électriques...<hr>";
   }
   public function getHoraires()
   {
       return "10h/ 18H <hr>";
   }
}
//-------------------------------------------------------------------------
class Plombier
{
   public function getSpecialiste()
   {
       return "tuyau, robinet, chauffe-eau, compteurs...<hr>";
   }
   public function getHoraires()
   {
       return "8h/ 19H <hr>";
   }
}
//----------------------------

class Entreprise 
{
    public $numero = 0;
    public function appeUnEmploye($employe)
    {
        $this->numero++;
        // $entreprise->monEmploye1 = new Plombier
        // $entreprise->monEmploye2 = new Electricien;

        $this->{"monEmploye" . $this->numero} = new $employe;//A chaque foid que l'on execute la méthode appeEmploye(), cela gènère dans le même temps une proprieté dans laquelle est stokées un e instance d'une classe
        return $this->{"monEmploye" . $this->numero};// on retourne l'objet généré 
        // return $entreprise->monEmploye1;
        // return $entreprise->monEmploye2;
    }
}
//---------------------
$entreprise = new Entreprise;
$entreprise->appeUnEmploye('Plombier');

// Afficherles méthodes de la classe plombier via l'objet issu de la classe entreprise '$entreprise'
// echo $entreprise->appeUnEmploye('Plombier')->getSpecialiste();
echo $entreprise->monEmploye1->getSpecialiste();
// echo $entreprise->appeUnEmploye('Plombier')->getHoraires();
echo $entreprise->monEmploye1->getHoraires();

//---------------------------
$entreprise->appeUnEmploye('Electricien');
echo $entreprise->monEmploye2->getSpecialiste();
echo $entreprise->monEmploye2->getHoraires();