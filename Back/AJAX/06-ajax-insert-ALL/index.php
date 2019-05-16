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
  <script src="ajax6.js"></script>

  <title>06 AJAX INSERT ALL</title>
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center">06 AJAX INSERT ALL</h1>
        <!--1. Réaliser un selecteur dans un formulaire en php qui regroupe tous les prenoms des employés, avec un bouton submit -->
        <div id="resultat">
                            <!-- 2. Réaliser le script php permettant d'afficher l'ensemble de la table employés -->
                        <?php  require_once('init.php'); ?>
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
        
                   
            <div id="message"></div>

        <form method="post" id="form" action="" class="col-md-4 offset-md-4">
        
         <div class="form-group">
                     
           
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" aria-describedby="" placeholder="Prénom à inserer" name="prenom">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" aria-describedby="" placeholder="nom à inserer" name="nom">
            <label for="sexe">Sexe</label>
            <input type="text" class="form-control" id="sexe" aria-describedby="" placeholder="sexe à inserer" name="">
            <label for="service">Service</label>
            <input type="text" class="form-control" id="service" aria-describedby="" placeholder="service à inserer"name="service" >
            <label for="dateembauche">Date embauche</label>
            <input type="text" class="form-control" id="dateembauche" aria-describedby="" placeholder="date d'embauche à inserer" name="date_embauche">
            <label for="salaire">Salaire</label>
            <input type="text" class="form-control" id="salaire" aria-describedby="" placeholder="salaire à inserer" name="salaire">
         </div>

         <button type="submit" id="submit" class="col-md-12 btn btn-dark">Valider</button>
        <!-- function efface_formulaire() {
                $(':input')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .prop('checked', false)
                .prop('selected', false);
        } -->
         </form><hr>
         

           
            
</div>
  
</body>
</html>