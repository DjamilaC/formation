<?php
require_once('init.php');
extract($_POST);
$tab = array();

$result= $bdd->query("SELECT * FROM employes WHERE id_employes = $id");
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