<?php
require_once('init.php');
extract($_POST);
$tab = array();

//---------REQUETE DE SUPRESSION
// requete test
// $result = $bdd->exec("DELETE FROM employes WHERE id_employes = 990");
// echo $result;
$result = $bdd->exec("DELETE FROM employes WHERE id_employes = '$id'");

// ----------DECLARATION DU SELECTEUR A JOUR
$result= $bdd->query("SELECT * FROM employes");
$tab['resultat'] = '<select class="col-md-6 offset-md-3 mb-4 mt-4" id="personne" name="personne">';

while($employes = $result->fetch(PDO::FETCH_ASSOC))
{
    $tab['resultat'].= "<option value='$employes[id_employes]'> $employes[nom]</option>";
}   
$tab['resultat'].= '</select>';
$tab['resultat'].= '</div>';

$tab['message'] = "<div class='col-md-6 offset-md-3 mt-3 alert alert-success text-center'>Lemployé <strong>$id</strong> a bien été supprimé</div>";// on cree un nouvel indice dans le tableau array pour stocker un message de validation

echo json_encode($tab);

?>