<!-- Exercice 1 : PHPOO
    - Créer une classe Etudiant
    - Créer les propriétés   private
        - prenom (string de 5 à 30 caracteres)
        - nom (string de 5 à 30)
        - email(email)
        - telephone (INT de 10 caracteres)
        
        - Créer une fonction getInfos() qui retourne un array avec toutes les infos
        - Instancier 3 fois la classe dans un autre fichier. Pour chaque etudiant affecter des valeurs et les afficher. 
         -->
<?php
class Etudiant 
{
    private $prenom;
    private $nom;
    private $email;
    private $telephone;

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
//-------------------NOM----------------------
    public function setNom($nom)
    {
        if(is_string($nom))
        {
            $this->nom = $nom;            
        }
        else
        {
            return "ce n'est pas un string !!";
             
        }
    }
    public function getNom() 
    {
        return $this->nom;
    }

    //-------------------EMAIL----------------------
    public function setEmail($email)
    {
        if(is_string($email))
        {
            $this->email = $email;            
        }
        else
        {
            return "ce n'est pas un string !!";
             
        }
    }
    public function getEmail() 
    {
        return $this->email;
    }

    //-------------------NOM----------------------
    public function setTelephone($telephone)
    {
        if(is_numeric($telephone))
        {
            $this->telephone = $telephone;            
        }
        else
        {
            return "ce n'est pas un string !!";
             
        }
    }
    public function getTelephone() 
    {
        return $this->telephone;
    }

}

$etudiant = new Etudiant;
echo'<pre>'; print_r($etudiant); echo'</pre>' . '<hr>' . '<hr>';

$etudiant1 = new Etudiant;
// echo'<pre>'; print_r($etudiant1); echo'</pre>' . '<hr>';
$etudiant1->setPrenom('Djamila');
echo "Mon Prénom est : ". $etudiant1->getPrenom() .'<br>';

$etudiant1->setNom('CHABANE');
echo "Mon Nom est : ". $etudiant1->getNom() .'<br>';

$etudiant1->setEmail('djamila.chabane@lepoles.com');
echo "Mon Mail est : ". $etudiant1->getEmail().'<br>';

$etudiant1->setTelephone('0753268576');
echo "Mon Teléphone est : ". $etudiant1->getTelephone() . '<hr>' . '<hr>';
//--------------------------------------------------------------

$etudiant2 = new Etudiant;
// echo'<pre>'; print_r($etudiant2); echo'</pre>' . '<hr>';

$etudiant2->setPrenom('Nassim');
echo "Mon Prénom est : ". $etudiant2->getPrenom() .'<br>' ;

$etudiant2->setNom('AMARA');
echo "Mon Nom est : ". $etudiant2->getNom().'<br>' ;

$etudiant2->setEmail('nassim.amara@lepoles.com');
echo "Mon Mail est : ". $etudiant2->getEmail() .'<br>' ;

$etudiant2->setTelephone('0615919616');
echo "Mon Teléphone est : ". $etudiant2->getTelephone() . '<hr>' . '<hr>' ;

//---------------------------------------------------
$etudiant3 = new Etudiant;
// echo'<pre>'; print_r($etudiant1); echo'</pre>' . '<hr>';

$etudiant3->setPrenom('Aziz');
echo "Mon Prénom est : ". $etudiant3->getPrenom() .'<br>';

$etudiant3->setNom('TOBBAL');
echo "Mon Nom est : ". $etudiant3->getNom().'<br>' ;

$etudiant3->setEmail('aziz.tobbal@lepoles.com');
echo "Mon Mail est : ". $etudiant3->getEmail() .'<br>' ;

$etudiant3->setTelephone('0671620754');
echo "Mon Teléphone est : ". $etudiant3->getTelephone() . '<hr>'.'<hr>' ;


