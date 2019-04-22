<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire2</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<?php  
   extract($_POST);
    $bdd = new PDO('mysql:host=localhost;dbname=repertoire', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    // echo '<pre>'; print_r($_POST); echo '</pre>';

    // if($_POST)
    // {
        // $data_insert = $bdd->prepare("INSERT into annuaire (nom, prenom, telephone, profession, ville, codepostal, adresse, date_de_naissance, sexe, description) VALUES (:nom, :prenom, :telephone, :profession, :ville, :codepostal, :adresse, :date_de_naissance, :sexe, :description)");

        // 1ère façon 
       
        // $data_insert->bindValue(":nom", $nom, PDO::PARAM_STR); 
        // $data_insert->bindValue(":prenom", $prenom, PDO::PARAM_STR); 
        // $data_insert->bindValue(":telephone", $telephone, PDO::PARAM_STR); 
        // $data_insert->bindValue(":profession", $profession, PDO::PARAM_STR); 
        // $data_insert->bindValue(":ville", $ville, PDO::PARAM_STR); 
        // $data_insert->bindValue(":codepostal", $codepostal, PDO::PARAM_STR); 
        // $data_insert->bindValue(":adresse", $adresse, PDO::PARAM_STR); 
        // $data_insert->bindValue(":date_de_naissance", $date_de_naissance, PDO::PARAM_STR); 
        // $data_insert->bindValue(":sexe", $sexe, PDO::PARAM_STR); 
        // $data_insert->bindValue(":description", $description, PDO::PARAM_STR);

        // 2ème façon

        // foreach($_POST as $key =>$value)
        // {                 
        //     $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);    
        // }
            
        // $data_insert->execute();

        // $resultat = $bdd->prepare("SELECT * FROM annuaire");
        // $resultat->execute();
        // while($inscrits = $resultat->fetch(PDO::FETCH_ASSOC))
        // {
        //    echo '<pre>'; print_r($inscrits); echo '</pre>' ; 
        // }
        // 

        // foreach($inscrits as $key => $tab)
        // {
        //     echo'<div class="col-md-3 offset-md-5 alert alert-success text-dark mx-auto text-center">';
        //     foreach($tab as $key2 => $value)
        //         {
        //         echo "$key2 : $value<br>";  
        //         }
        //      echo '</div>';                     
        //  }
        //  echo '<hr>';


    // }// fin ($_POST)
 
 

    
?>

<h1 class="col-md-6 offset-md-4" >REPERTOIRE</h1>

 <form class="col-md-4 offset-md-4" method="post" action="affichage_repertoire.php">

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" aria-describedby="" placeholder="Enter nom" name="nom">            
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" aria-describedby="" placeholder="Enter prenom" name="prenom">    
        </div>

        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" class="form-control" id="tel" placeholder="telephone" name="telephone">
        </div>
        
        <div class="form-group">
            <label for="profession">Profession</label>
            <input type="text" class="form-control" id="pROFESSION" aria-describedby="" placeholder="profession" name="profession">  
        </div>          

        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" aria-describedby="" placeholder="Enter ville" name="ville">    
        </div>

        <div class="form-group">
            <label for="codepostal">Code_Postal</label>
            <input type="text" class="form-control" id="codepostal" aria-describedby="" placeholder="Enter code postal" name="codepostal">            
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" aria-describedby="" placeholder="Enter adresse" name="adresse">    
        </div>

        <div class="form-group">
            <label for="date_de_naissance">Date de Naissance</label>
            <input type="date" class="form-control" id="date_de_naissance" aria-describedby="" placeholder="date de naissance" name="date_de_naissance">    
        </div>        
        
        <div class="form-group">
            <label for="sexe">Sexe</label>
            <select class="form-control" id="sexe" name="sexe">
            <option></option>
            <option value="f">Feminin</option>
            <option value="m">Masculin</option>      
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="5" name="description"></textarea>
        </div>


        
        <button type="submit" class="btn btn-danger">enregistrement</button>
</form>


























 <!-- bibliotheque pour bootstrap -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
    
</body>
</html>