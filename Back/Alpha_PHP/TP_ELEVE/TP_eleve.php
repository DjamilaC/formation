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

    $msg_nom="";
    $msg_prenom="";
    $msg_classe="";
    $msg_parents="";
    $msg_telephone="";
    $msg_valid="";
   

if($_POST)
    { 
                                //LA VERIFICATION DU FORMULAIRE

        if (empty($nom) || iconv_strlen($nom) < 2 || iconv_strlen($nom) > 30) {
            $msg_nom .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre nom entre 2 et 30 caractères</div>';
        }                      

        if (empty($prenom) || iconv_strlen($prenom) < 2 || iconv_strlen($prenom) > 30) {
        //(!isset($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 30)
        // AUTRE FACON de formuler la condition
            $msg_prenom .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre prenom entre 2 et 30 caractères</div>';
        }

        if (empty($classe) || iconv_strlen($classe) < 2 || iconv_strlen($classe) > 30) {
            $msg_classe .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre nom entre 2 et 30 caractères</div>';
        }

        if (empty($parents) || iconv_strlen($parents) < 2 || iconv_strlen($parents) > 30) {
            $msg_parents .= '<div class="alert alert-warning text-danger"> Veuillez saisir votre nom entre 2 et 30 caractères</div>';
        }

        // le telephone
        if (!preg_match('#^[0-9]{10}+$#', $telephone)) 
        {
            // preg_match est une expression réguliere (regex) qui toujours entourée de # afin de préciser les options
            /*
        ^ indique le début de la chaine
        $ indique la fin de la chaine
        + est ici pour dire que les caracteres peuvent etre utilisés plusieurs fois
        */
            $msg_telephone .= '<div class="alert alert-warning text-danger"> Veuillez entrer votre numéro de téléphone de 10 chiffres</div>';
        }
        
        // si je décide de ne pas declarer ma variable, je passe par la méthode echo de gregory, et on remplace $msg .= par echo
        if (empty($msg_nom) && empty($msg_prenom) && empty($msg_classe) && empty($msg_parents) && empty($msg_telephone)) 
        {
            // si notre variable $msg est vide (empty), c' est a dire qu' elle n' a stocké aucune valeur, donc aucune erreur, alors c' est que tout est ok
            echo '<div class="alert alert-success text-dark">Félicitations, votre formulaire est valide et par conséquent transmis</div>';
        }

               
                       // ----------------------CONNEXION A LA BDD--------------------------

        $bdd = new PDO('mysql:host=localhost;dbname=eleve', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));    
    // echo '<pre>'; print_r($_POST); echo '</pre>';


                      // ----------------------REQUETE D'INSERTION--------------------------

        $data_insert = $bdd->prepare("INSERT INTO fiche (nom, prenom, classe, parents, telephone) VALUES (:nom, :prenom, :classe, :parents, :telephone)");

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
        $msg_valid .= '<div class="alert alert-success">L\'élève a bien été enregistré.</div>';
        
                      

        $resultat = $bdd->query("SELECT * FROM fiche");
        $eleve = $resultat->fetchAll(PDO::FETCH_ASSOC);
        // echo '<pre>'; print_r($eleve); echo '</pre>' ;

        foreach($eleve as $key => $tab)
        {
            echo'<div class="col-md-3 offset-md-5 alert alert-success text-dark mx-auto text-center">';
            foreach($tab as $key2 => $value)
                {
                echo "$key2 : $value<br>";  
                }
             echo '</div>';                     
         }
         echo '<hr>';
          

    }// FIN DE if ($_POST)
 
 

    
?>


                     <!-------------LE FORMULAIRE-------------->


    <h1 class="col-md-6 offset-md-4" >ELEVE</h1>

    <form class="col-md-4 offset-md-4" method="post" action="">

        <?= $msg_valid ?> <!-- message de validation du formulaire-->

        <div class="form-group">
            <label for="nom">Nom</label>
            <?= $msg_nom ?> <!-- message d'erreur nom non valide-->
            <input type="text" class="form-control" id="nom" aria-describedby="" placeholder="Enter nom" name="nom">            
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <?= $msg_prenom ?><!-- message d'erreur prenom non valide-->
            <input type="text" class="form-control" id="prenom" aria-describedby="" placeholder="Enter prenom" name="prenom">    
        </div>
        
        <div class="form-group">
            <label for="classe">Classe</label>
            <?= $msg_classe ?> <!-- message d'erreur classe non valide-->
            <input type="text" class="form-control" id="classe" aria-describedby="" placeholder="classe" name="classe">  
        </div>
        
        <div class="form-group">
            <label for="parents">Parents</label>
            <?= $msg_parents ?> <!-- message d'erreur parents non valide-->
            <input type="text" class="form-control" id="parents" aria-describedby="" placeholder="parents" name="parents">    
        </div> 

        <div class="form-group">
            <label for="telephone">Telephone</label>
            <?= $msg_telephone ?> <!-- message d'erreur numéro de telephone non valide-->
            <input type="text" class="form-control" id="tel" placeholder="telephone" name="telephone">
        </div>
        
        <button type="submit" class="btn btn-danger">enregistrement</button>
</form>
</div>


</body>
</html>