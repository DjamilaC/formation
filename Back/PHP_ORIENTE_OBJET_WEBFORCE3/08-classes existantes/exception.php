<?php
function recherche($tab, $elem)
{
    if(!is_array($tab))
    throw new Exception('Vous devez envoyer un ARRAy!!');
    if(sizeof($tab) <= 0)
    throw new Exception('Vous devez envoyer un ARRAy!!');
    $position = array_search($elem, $tab);
    return $position;
}
//----------------------------------------------------------
$liste1 = array();
$liste2 = array('Mario', 'Yoshi', 'Toad', 'Bowser');
//----------------------------------------------------------
try
{
    echo "position de 'Mario' dans la table ARRAY : " . recherche($liste2, 'Mario'). '<hr>'; 
    echo "position de 'Yoshi' dans la table ARRAY : " . recherche($liste2, 'Yoshi'). '<hr>'; 
    echo "position de 'Yoshi' dans la table ARRAY : " . recherche($liste1, 'Bowser'). '<hr>'; 
    echo 'traitements.....';// ne s'affiche pas, il n'ya pas de raison de continuer des traitements si l'un d'entre eux dysfonctionne,car les prochains traitements peuvent être dépendant de celui qui dysfonctionne
}
catch(Exception $e)  // Bloc de capture, on tombe dans le bloc 'catch' si un traitement a dysfonctionné dans le bloc 'try'.Cela permet d'attraper les exceptions et de personnaliser le message d'erreur
{
    // $e est un objet issu de la class 'Exception', il contient ses propres méthodes tel que getMessage() qui permet d'afficher le mesage d'erreur mais aussi getFile() qui permet d'afficher le fichier dans lequel a été commis l'erreur.
    echo '<pre>'; print_r($e); echo'</pre>';
    echo '<pre>'; print_r(get_class_methods($e)); echo'</pre>';
    echo "Le message d'erreurs: ". $e->getMessage() . " à la ligne ". $e->getLine()." dans le fichier". $e->getFile();//on pioche dans l'objet afin de personnaliser le message d'erreur
}
// il est possible de mettre plusieurs try//catch à la suite. try / catch fonctionne ensemble
// Exo: afficher une phrase comportant le message d'erreurs, le fichier dans lequel est l'erreur et la ligne de l'erreur

echo '<hr></hr>';
//-------------CONNEXION A LA BDD
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test2', 'root', '');
    echo "Connexion reussie!!";
}
catch(PDOException $e)
{
    echo '<pre>'; print_r($e); echo'</pre>';
    echo '<pre>'; print_r(get_class_methods($e)); echo'</pre>';
    // lorsque le traitement dysfonctionne dans le 'try', on tombe dans le 'catch' et la classe PDOException est instancié / $e représente un objet issu de la classe PDOException, cette objet contient des méthodes  avec le détail de l'erreur (message, ligne, fichier, code_erreur etc...)

    // Exo : personnalier le message d'erreurs en cas de mauvaise connexion à la BDD

    echo "Le message d'erreurs: ". $e->getMessage() . " à la ligne ". $e->getLine()." dans le fichier".  $e->getFile();
}


    