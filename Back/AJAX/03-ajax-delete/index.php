<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- lien bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- lien jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <!-- lien de notre fichier js -->
  <script src="ajax3.js"></script>

  <title>03 AJAX DELETE</title>
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center">Supprimer un employé</h1>
        <form method="post" action="">
                <div id="employes">
                        <?php
                        //Réaliser un selecteur en php avec tout les noms des employés
                        require_once('init.php');            
                        $result = $bdd->query("SELECT * FROM employes");
                        echo '<select class="col-md-6 offset-md-3 mb-4 mt-4" id="personne" name="personne">' ;
                        while($employes = $result->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value='$employes[id_employes]'> $employes[nom]</option>";
                        
                        //autre methode
                        //echo $employe['nom'] ;
                        //echo '</option>';
                        }
                        echo'</select>';
                        ?>
                </div>
                <input type="submit" value="supprimer" id="submit" class="col-md-6 offset-md-3 btn btn-dark">
        </form>
       
    </div>







    
</body>
</html>