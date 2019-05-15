<?php
require_once('init.php');
extract($_POST);
$tab = array();

// ----------DECLARATION DE LA REQUETE DE SELECTION
$result= $bdd->query("SELECT * FROM employes WHERE prenom = '$prenom'");
    // echo '<pre>'; var_dump($result); echo'</pre>';

$tab['resultat'] = '<table class="table table-bordered text-center"><tr>';

for($i = 0; $i < $result->columnCount(); $i++)
{
    $colonne = $result->getColumnMeta($i);
    $tab['resultat'] .= "<th>$colonne[name]</th>";
}
$tab['resultat'] .= '</tr><tr>';
$employe = $result->fetch(PDO::FETCH_ASSOC);  
// echo '<pre>'; var_dump($employe); echo'</pre>';       

foreach($employe as $value){
    $tab['resultat'] .= "<td>$value</td>";
}
$tab['resultat'] .= '</tr></table>';
echo json_encode($tab);

?>

            