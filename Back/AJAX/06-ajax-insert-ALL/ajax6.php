<?php
require_once('init.php');
extract($_POST);
$tab = array();

// ---------------Requête d'insertion
if(empty($prenom) || empty($nom) || empty($sexe) || empty($salaire) || empty($date_embauche) || empty($service)){
    $tab['message'] = "<div class='col-md-6 offset-md-3 mt-3 alert alert-danger text-center'>Veuillez remplir tout les champs</div>";
}else
{
 $result = $bdd->query("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES('$prenom', '$nom', '$sexe', '$service', '$date_embauche', '$salaire')");

 $result = $bdd->query("SELECT * FROM employes");
  $tab['resultat'] = '<table class="table table-bordered text-center"><tr>';
  for($i = 0; $i < $result->columnCount(); $i++){
      $colonne = $result->getColumnMeta($i);
      $tab['resultat'] .= "<th>$colonne[name]</th>";
  }          
  $tab['resultat'] .= '</tr>';
     while($employes = $result->fetch(PDO::FETCH_ASSOC)){
        $tab['resultat'] .='<tr>';
        foreach($employes as $value){
            $tab['resultat'] .="<td>$value</td>"; 
        }
        $tab['resultat'] .='</tr>';
     }
       
 $tab['resultat'] .='</table>';
 $tab['message'] = "<div class='col-md-6 offset-md-3 mt-3 alert alert-success text-center'>L'employé <strong>$prenom</strong> a bien été ajouté</div>";
}

echo json_encode($tab);

  ?>          