<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ELEVE</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<?php  
   extract($_POST);
    $bdd = new PDO('mysql:host=localhost;dbname=eleve', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    echo '<pre>'; print_r($_POST); echo '</pre>';

    if($_POST)
    {
        $data_insert = $bdd->prepare("INSERT into fiche (nom, prenom, classe, parents, telephone) VALUES (:nom, :prenom, :classe, :parents, :telephone)");

        // 1ère façon 
       
        // $data_insert->bindValue(":nom", $nom, PDO::PARAM_STR); 
        // $data_insert->bindValue(":prenom", $prenom, PDO::PARAM_STR);          
        // $data_insert->bindValue(":classe", $classe, PDO::PARAM_STR); 
        // $data_insert->bindValue(":parents", $parents, PDO::PARAM_STR); 
        // $data_insert->bindValue(":codepostal", $codepostal, PDO::PARAM_STR); 
        // $data_insert->bindValue(":telephone", $telephone, PDO::PARAM_STR);

        // 2ème façon

        foreach($_POST as $key =>$value)
        {                 
            $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);    
        }            
        $data_insert->execute();

        // le nom
        if (!isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 30) {
            $msg .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre pseudo entre 2 et 30 caractères</div>';
        }

        // le prenom
        if (!isset($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 30) {
            $msg .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre prenom entre 2 et 30 caractères</div>';
        }

        // le telephone
        if (!preg_match('#^[0-9]{10}+$#', $_POST['telephone'])) {
            // preg_match est une expression réguliere (regex) qui toujours entourée de # afin de préciser les options
            /*
        ^ indique le début de la chaine
        $ indique la fin de la chaine
        + est ici pour dire que les caracteres peuvent etre utilisés plusieurs fois
        */
            $msg .= '<div class="alert alert-warning text-danger"> Veuillez entrer votre numéro de téléphone de 10 chiffres</div>';
        }

        // la profession
        if (!isset($_POST['profession']) || strlen($_POST['profession']) < 2 || strlen($_POST['profession']) > 30) {
            $msg .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre profession entre 2 et 30 caractères</div>';
        }

        // la ville
        if (!isset($_POST['ville']) || strlen($_POST['ville']) < 2 || strlen($_POST['ville']) > 30) {
            $msg .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre ville entre 2 et 30 caractères</div>';
        }

        if (!is_numeric($_POST['codePostal']) || iconv_strlen($_POST['codePostal']) !== 5) {
            $msg .= '<div class="alert alert-warning text-danger">Veuillez saisir 5 chiffres</div>';
            // iconv permet de ne compter que les caracteres, alors qur strlen va compter les caracteres spéciaux aussi, comme un accent ( qui ne sera pas compté car au dessus d' un autre caractere)
        }

        // l' adresse
        if (!isset($_POST['adresse']) || strlen($_POST['adresse']) < 2 || strlen($_POST['adresse']) > 30) {
            $msg .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre adresse entre 2 et 30 caractères</div>';
        }

        if (!isset($_POST['sexe']) || $_POST['sexe'] != "f" && $_POST['sexe'] != "h" && $_POST['sexe'] != "n") {
            $msg .= '<div class="alert alert-warning text-danger"> Veuillez choisir un genre</div>';
        }



        echo $msg;
        // si je décide de ne pas declarer ma variable, je passe par la méthode echo de gregory, et on remplace $msg .= par echo
        if (empty($msg)) {
            // si notre variable $msg est vide (empty), c' est a dire qu' elle n' a stocké aucune valeur, donc aucune erreur, alors c' est que tout est ok
            echo '<div class="alert alert-success text-dark">Félicitations, votre formulaire est valide et par conséquent transmis</div>';
        }


    }
 
 

    
?>

<h1 class="col-md-6 offset-md-4" >ELEVE</h1>

 <form class="col-md-4 offset-md-4" method="post" action="">
 
        
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" aria-describedby="" placeholder="Enter nom" name="nom">            
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" aria-describedby="" placeholder="Enter prenom" name="prenom">    
        </div>
        
        <div class="form-group">
            <label for="classe">Classe</label>
            <input type="text" class="form-control" id="classe" aria-describedby="" placeholder="classe" name="classe">  
        </div>
        
        <div class="form-group">
            <label for="parents">Parents</label>
            <input type="text" class="form-control" id="parents" aria-describedby="" placeholder="parents" name="parents">    
        </div> 

        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" class="form-control" id="tel" placeholder="telephone" name="telephone">
        </div>
        
        <button type="submit" class="btn btn-danger">enregistrement</button>
</form>
</div>


</body>
</html>