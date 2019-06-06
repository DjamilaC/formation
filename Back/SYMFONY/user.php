<?php
// user.php

class User 
{
    public $pseudo;
    private $prenom;
    public $email;
    public $date_naissance;

    public function getPrenom()
        {
            $this->$prenom;
        }
    public function setPrenom()
    {
      if(!isset($_POST['prenom'])){
    if(strlen($_POST['prenom']) >=3 && strlen($_POST['prenom']) <= 20){
        $user->prenom = $prenom;
        // inurl id= liste de sites non securisé
        //ajouter une cote à l'id.(erreur sql) 
            }
        }  
    }

}
class Admin extends User
{
    public function setPassword($password) {
        $this -> password = $password
    }
}

$user = New user;
// enregistrement du prénom
$user->setPrenom($_POST['prenom']);
echo 'prenom : ' . $user -> prenom;