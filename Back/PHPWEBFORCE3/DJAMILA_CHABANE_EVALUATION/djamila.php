<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evaluation</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/djamila.css">
</head>
<body>
<?php

extract($_POST);
$error ='';

                 // -----CONNEXION A LA BDD
$bdd = new PDO('mysql:host=localhost;dbname=immobilier', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

echo '<pre>'; print_r($_POST); echo '</pre>';

                //---- JE VERIFIE MES CHAMPS
foreach($_POST as $key => $value)
    {
        $_POST[$key] = strip_tags(trim($value));
    }

if ($_POST)
{

    // Le Titre
    if (!isset($_POST['titre']) || iconv_strlen($_POST['titre']) < 2 || iconv_strlen($_POST['titre']) > 50) {
        $error .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre titre entre 2 et 30 caractères</div>';
    }
    
    // l' adresse
    if (!isset($_POST['adresse']) || strlen($_POST['adresse']) < 2 || strlen($_POST['adresse']) > 30) {
        $error .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre adresse entre 2 et 30 caractères</div>';
    }

    // LA ville
    if (!isset($_POST['ville']) || strlen($_POST['ville']) < 2 || strlen($_POST['ville']) > 30)
    {
        $error .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre ville entre 2 et 30 caractères</div>';
    }

    // LE code postal    
    if (!is_numeric($_POST['cp']) || iconv_strlen($_POST['cp']) !== 5)
    {
        $error .= '<div class="alert alert-warning text-danger">Code Postal invalide, Veuillez saisir 5 chiffres</div>';
    }
    
    // LE Type
    if (!isset($_POST['type']) || $_POST['type'] != "location" && $_POST['type'] != "vente")
    {
        $error .= '<div class="alert alert-warning text-danger"> Veuillez choisir un type</div>';
    }

    // LE Prix
    if (!isset($_POST['prix']) || !is_numeric($_POST['prix']))
    {
        $error .= '<div class="alert alert-warning text-danger"> Veuillez entrer un prix valide </div>';
    }

    // La Surface
    if (!isset($_POST['surface']) || !is_numeric($_POST['surface'])  )
    {
        $error .= '<div class="alert alert-warning text-danger"> Veuillez entrer une surface valide </div>';
    }
    // verification de la photo 
    $image = immobilier($_FILES['photo']['name']);
    $dossier = 'images';
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['photo']['name'], '.');
    
    if(!in_array($extension, $extensions))
    //Si l'extension n'est pas dans le tableau
    {
        $error .= '<div class="alert alert-warning text-danger"> Vous devez uploader un fichier de type png, gif, jpg ou jpeg... </div>';
    }
    echo $error;

    if(empty($error))
    {
        echo'<div class="com-md-4 offset-md-4 alert alert-success text-center text-dark"> Enregistrement validé!! </div>';  
    }
    
    //2 J'INSERT EN BDD SI JE N'AI PAS DE MSG D'ERREUR
    $data_insert = $bdd->prepare("INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type, description) VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)");       

        foreach($_POST as $key =>$value)
        {                 
            $data_insert->bindValue(":$key", $value, PDO::PARAM_STR);    
        }            
        $data_insert->execute();
        
        


}// FIN de $_POST
?>



                 <!-- Mon FORMULAIRE -->
    
<h1 class="col-md-6 offset-md-4" >FORMULAIRE LOGEMENT</h1>
 <form class="col-md-6 offset-md-4" method="post" action="detail_logement.php" enctype="multipart/form-data">

 <div class="form-group">
    <label for="nom">Titre *</label>
    <input type="text" class="form-control" id="titre" aria-describedby="" placeholder="mon titre" name="titre">    
  </div>
    
  <div class="form-group">
    <label for="adresse">Adresse *</label>
    <input type="text" class="form-control" id="adresse" aria-describedby="" placeholder="mon adresse" name="adresse">    
  </div>

  <div class="form-group">
    <label for="ville">Ville *</label>
    <input type="text" class="form-control" id="ville" aria-describedby="" placeholder="ma ville" name="ville">    
  </div>

  <div class="form-group">
    <label for="cp">Code Postal * </label>
    <input type="text" class="form-control" id="cp" aria-describedby="" placeholder=" code postal" name="cp">    
  </div>

  <div class="form-group">
    <label for="surface">Surface *</label>
    <input type="text" class="form-control" id="surface" aria-describedby="" placeholder=" surface" name="surface">    
  </div>

  <div class="form-group">
    <label for="prix">Prix *</label>
    <input type="text" class="form-control" id="prix" aria-describedby="" placeholder="prix" name="prix">    
  </div>

  <div class="form-group">
    <label for="photo">Photo</label>    
    <input type="file" class="form-control" id="photo" aria-describedby="" placeholder="photo" name="photo"> 
    <!-- <?php if(!empty($photo)): ?>
        <em>Vous pouvez uploader une nouvelle photo si vous souhaitez la changer</em><br>
        <img src="<?= $photo ?>" alt="<? $titre ?>">
        <?php endif; ?>-->
        <input type="hidden" id="photo" name="photo" value="<?= $photo ?>">    
  </div>
   
  <div class="form-group">
    <label for="type">Type *</label>
    <select class="form-control" id="type" name="type">
    <option></option>
      <option value="location">Location</option>
      <option value="vente">vente</option>      
    </select>
  </div>

  <div class="form-group">
    <label for="description">description</label>
    <textarea class="form-control" id="description" rows="5" name="description"></textarea>
  </div>
  
  <button type="submit" class="btn btn-danger">Enregistrer</button>
</form>
<hr>














    <!-- bibliotheque pour bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea 6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>