<?php
require_once('init.php');
extract($_POST);
$tab = array();


 
 $result = $bdd->query("SELECT * FROM employes WHERE service = '$service'");
  $tab['resultat'] = '<table class="table table-bordered text-center">';
  for($i = 0; $i < $result->columnCount(); $i++){
      $colonne = $result->getColumnMeta($i);
      $tab['resultat'] .= "<th>$colonne[name]</th>";
  }          
  $tab['resultat'] .= "</tr>";
     while($employes = $result->fetch(PDO::FETCH_ASSOC)){
        $tab['resultat'] .= "<tr>";
        foreach($employes as $value){
            $tab['resultat'] .="<td>$value</td>"; 
        }
        $tab['resultat'] .="</tr>";
     }
       
 $tab['resultat'] .='</table>';


echo json_encode($tab);

  ?>          