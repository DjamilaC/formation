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
        if(iconv_strlen($prenom) < 5 || iconv_strlen($prenom) >30)
        {
           $this->error = '<p>le prenom doit contenie entre 5 et 30 caractères max !</p>';
           return $this->error;             
        }
        else
        {
            $this->prenom = $prenom; 
            return $this;            
        }
    }
    public function getPrenom() // un getteur ne reçoit jamais d'argument
    {
        return $this->prenom;
    }
//-------------------NOM----------------------
    public function setNom($nom)
    {
        if(iconv_strlen($nom) < 5 || iconv_strlen($nom) >30)
        {
            $this->error = '<p>le nom doit contenir entre 5 et 30 caractères max !</p>';
            return $this->error;            
        }
        else
        {
            $this->nom = $nom;
             
        }
    }
    public function getNom() 
    {
        return $this->nom;
    }

    //-------------------EMAIL----------------------
    public function setEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL ))
        {
            $this->error = '<p> le mail n\'est pas valide </p>' ; 
            return $this->error;
        }
        else
        {            
              $this->email = $email;   
        }
    }
    public function getEmail() 
    {
        return $this->email;
    }

    //-------------------NOM----------------------
    public function setTelephone($telephone)
    {
        if(!preg_match('#^[0-9]{10}+$#', $telephone))
        {
            $this->error = '<p> le téléphone n\'est pas valide </p>' ; 
            return $this->error;            
        }
        else
        {
            $this->telephone = $telephone;
            return $this;
        }
    }
    public function getTelephone() 
    {
        return $this->telephone;
    }
    // ------------------getInfo-----------------
    public function getInfos()
    {
        $info['prenom'] = $this->getPrenom();
        $info['nom'] = $this->getNom();
        $info['email'] = $this->getEmail();
        $info['telephone'] = $this->getTelephone();
        return $info;
    }

}

