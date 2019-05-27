

<!-- Exercice 2 : AJAX
    - Créer une page HTML avec un bouton afficher (ce bouton ne recharge pas la page)
    - En ajax (JS + PHP), au click sur le bouton, récupérer et afficher sous la forme d'un tableau HTML les infos des produits de la boutique (BDD : site_commerce)
    
    - si tout est terminé, ajouter un formulaire pour ajouter un produit (en AJAX) -->



<?php
require_once('init.php');
extract($_POST);
$tab = array();

  $result = $bdd->query("SELECT * FROM produit");
 $tab['resultat'] = '<table class="table table-bordered text-center"><tr>'; 

        for($i = 0; $i < $result->columnCount(); $i++)
        {
            $colonne = $result->getColumnMeta($i);
            $tab['resultat'] .= "<th>$colonne[name]</th>";
        }          
    $tab['resultat'] .= '</tr>';
        while($produit = $result->fetch(PDO::FETCH_ASSOC))
        {
            $tab['resultat'] .= '<tr>';
                foreach($produit as $value){
                    $tab['resultat'] .= "<td>$value</td>"; 
                }
            $tab['resultat'] .= '</tr>';
        }      
$tab['resultat'] .='</table>';

echo json_encode($tab);
// $tab['resultat'] = '<table class="table table-dark text-center">';
// $tab['resultat'] = '<tr>';

        
//         for($i = 0; $i < $result->columnCount(); $i++)
//         {
//             $colonne = $result->getColumnMeta($i);
//             $tab['resultat'] .= "<th>$colonne[name]</th>";
//         }
//         $tab['resultat'] .= '</tr>';
        
//         while($list = $result->fetch(PDO::FETCH_ASSOC))
//         {
//             $tab['resultat'] .= '<tr>';
                    
//                     foreach($list as $value)
//                     {
//                         $tab['resultat'] .="<td>$value</td>";
//                     }
                    
//                     $tab['resultat'] .= '</tr>';
//                 }
                
                
//                 $tab['resultat'] .= '</table>';
                
//                 echo json_encode($tab); 
?> 