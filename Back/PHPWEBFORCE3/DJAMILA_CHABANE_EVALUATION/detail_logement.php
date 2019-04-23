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


<h1>Liste des logements</h1>

<?php
extract($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=immobilier', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// echo'<pre>'; echo print_r($_POST); echo '</pre>';


$resultat =$bdd->prepare("SELECT * FROM logement");
$resultat->execute();
// $logements = $resultat->fetch(PDO::FETCH_ASSOC);

// {
//     echo '<pre>'; print_r($logements); echo '</pre>' ;  
// } 
?>
<table class="table-bordered text-center" >
            <tr>
                <th>Id_logement</th>
                <th>Titre</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code Postal</th>
                <th>Surface</th>
                <th>Prix</th>
                <th>Photo</th>
                <th>Type</th>
                <th>Description</th>
                

            </tr>
        <?php
            while($logements = $resultat->fetch(PDO::FETCH_ASSOC))
            {
                echo '
                        <tr>
                            <td>'.$logements['id_logement'].'</td>
                            <td>'.$logements['titre'].'</td>
                            <td>'.$logements['adresse'].'</td>
                            <td>'.$logements['ville'].'</td>
                            <td>'.$logements['cp'].'</td>
                            <td>'.$logements['surface'].'</td>
                            <td>'.$logements['prix'].'</td>
                            <td>'.$logements['photo'].'</td>
                            <td>'.$logements['type'].'</td>
                            <td>'.$logements['description'].'</td>
                        </tr>
                ';
            }
        ?>
        </table>

 <!-- bibliotheque pour bootstrap -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea 6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
