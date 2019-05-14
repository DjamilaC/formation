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
echo json_encode($tab);
?>