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
if(isset($_post));
// echo '<pre>'; print_r($_POST); echo'</pre>';

?>


<h1 class="col-md-6 offset-md-4" >FORMULAIRE</h1>
 <form class="col-md-6 offset-md-4" method="post" action="">

 <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" aria-describedby="" placeholder="mon nom" name="nom">
    
  </div>
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" id="prenom" aria-describedby="" placeholder="mon prenom" name="prenom">
    
  </div>
   
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" id="adresse" aria-describedby="" placeholder="mon adresse" name="adresse">    
  </div>
  <div class="form-group">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" id="ville" aria-describedby="" placeholder="ma ville" name="ville">    
  </div>

  <div class="form-group">
    <label for="codepostal">Code_Postal</label>
    <input type="text" class="form-control" id="codepostal" aria-describedby="" placeholder=" code postal" name="codepostal">
    
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
    <label for="description">description</label>
    <textarea class="form-control" id="description" rows="5" name="description"></textarea>
  </div>
  
  <button type="submit" class="btn btn-danger">Envoi</button>
</form>
<hr>

           <!-- formulaire  voiture -->
    <?php
    if(isset($_POST));
    echo '<pre>'; print_r($_POST); echo'</pre>';


    ?>

<h1 class="col-md-6 offset-md-4" >FORMULAIRE VOITURE</h1>
    <form class="col-md-6 offset-md-4" method="post" action="tp_01_bis.php">

    <div class="form-group">
        <label for="marque">Marque</label>
        <input type="text" class="form-control" id="marque" aria-describedby="" placeholder="marque" name="marque">
        
    </div>

    <div class="form-group">
        <label for="modele">Modèle</label>
        <input type="text" class="form-control" id="modele" aria-describedby="" placeholder="modele" name="modele">    
    </div>
    
    <div class="form-group">
        <label for="couleur">Couleur</label>
        <input type="text" class="form-control" id="couleur" aria-describedby="" placeholder="couleur" name="couleur">    
    </div>

    <div class="form-group">
        <label for="km">KM</label>
        <input type="text" class="form-control" id="km" aria-describedby="" placeholder="km" name="km">    
    </div>

    <div class="form-group">
        <label for="carburant">Carburant</label>
        <input type="text" class="form-control" id="carburant" aria-describedby="" placeholder="carburant" name="carburant">    
    </div>
    
    <div class="form-group">
        <label for="annee">Année</label>
        <input type="text" class="form-control" id="annee" aria-describedby="" placeholder="annee" name="annee">    
    </div>

    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="text" class="form-control" id="prix" aria-describedby="" placeholder="prix" name="prix">    
    </div>

    <div class="form-group">
        <label for="puissance">Puissance</label>
        <input type="text" class="form-control" id="puissance" aria-describedby="" placeholder="puissance" name="puissance">    
    </div>

    <div class="form-group">
        <label for="options">Options</label>
        <input type="text" class="form-control" id="options" aria-describedby="" placeholder="options" name="options">    
    </div>
    
    <button type="submit" class="btn btn-danger">Envoi</button>
    </form> <hr>

                   <!-- FORMULAIRE MEMBRE -->
    <?php
    $msg ='<div class="com-md-4 offset-md-4 alert alert-danger text-center text-dark"> Le pseudo n\'est pas valide!! </div>'; 
    if($_POST)
    {
        if(strlen($_POST['pseudo'] < 3 || strlen($_POST['pseudo'] >10))
        {
            echo  $msg; 
        }
    }
    // echo '<pre>'; print_r($_POST); echo'</pre>';



    ?>

    <h1 class="col-md-6 offset-md-4" >FORMULAIRE MEMBRE</h1>

 <form class="col-md-6 offset-md-4" method="post" action="">
  
  <div class="form-group">
    <label for="pseudo">Pseudo</label>
    <input type="text" class="form-control" id="pseudo" aria-describedby="" placeholder="Enter pseudo" name="pseudo">
    
  </div>

  <div class="form-group">
    <label for="mdp">Password</label>
    <input type="text" class="form-control" id="mdp" placeholder="Password" name="mdp">
  </div>
    
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">    
  </div>
  
  <button type="submit" class="btn btn-danger">Envoi</button>
</form>





















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
    
</body>
</html>