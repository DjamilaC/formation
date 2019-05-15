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
  <script src="ajax5.js"></script>

  <title>05 AJAX SELECT ID</title>
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center">05 AJAX SELECT ID</h1>
        <!--1. Réaliser un selecteur dans un formulaire en php qui regroupe tous les prenoms des employés, avec un bouton submit -->

                    <!---------------PREMIERE METHODE ------------->

        <form method="post" action="" class="col-md-4 offset-md-4">
        
         <div class="form-group">
            <select class="form-control" id="personne" name="personne">
            <?php
            require_once('init.php');
            $result = $bdd->query('SELECT * FROM employes');
            ?>   
                <?php while($employes = $result->fetch(PDO::FETCH_ASSOC)):
                ?>
                    <option value="<?= $employes['id_employes']?>"><?=$employes['nom'] ?></option>
                <?php endwhile; ?>
            </select>
         </div>
         <input type="submit" value="rechercher" id="submit" class="col-md-12 btn btn-dark">
         </form><hr>

                    <!---------------DEUXIEME METHODE ------------->

        <form method="post" action="">
                <div id="employes">
                        <?php
                        
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
                 
                <input type="submit" value="Filtrer par nom" id="submit" class="col-md-6 mb-4 offset-md-3 btn btn-dark">
        </form>
            
            <div id="resultat">
                        <!-- 2. Réaliser le script php permettant d'afficher l'ensemble de la table employés -->

                    <?php $result = $bdd->query("SELECT * FROM employes"); ?>
                    <table class="table table-bordered text-center">
                    <?php for($i = 0; $i < $result->columnCount(); $i++):
                    $colonne = $result->getColumnMeta($i);
                        ?>
                            <th><?= $colonne['name'] ?></th>

                        <?php endfor; ?>
                        </tr>
                        <?php while($employes = $result->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                        <?php foreach($employes as $value):?>
                        <td><?=$value?></td>
                        <?php endforeach ?>
                        </tr>
                    <?php endwhile; ?>
                    </table>   
            
             </div>                 
</div>
  
</body>
</html>