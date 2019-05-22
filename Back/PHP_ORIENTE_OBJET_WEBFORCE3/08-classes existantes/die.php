<?php
function recherche($tab, $elem)
{
    if(!is_array($tab))
    {
        die('Vous devez envoyer un ARRAY');// si le die() s'execute, tout les traiments suivant ne sortent pas
        // die() permet de gerer les erreurs "propres" en français
    }
    $position = array_search($elem, $tab); // array_search() est une fonction prédéfinie qui permet de trouver la position d'un element dans un tableau ARRAY, la fonction retourne l'indice auquel se trouve l'élément
    return $position;
}
//-------------------------------------------------------------------
$liste = array('Mario', 'Yoshi', 'Toad', 'Bowser');
echo "position de 'Mario' dans la table ARRAY : " . recherche($liste, 'Mario'). '<hr>'; 
echo "position de 'Toad' dans la table ARRAY : " . recherche($liste, 'Toad'). '<hr>'; 
echo "position de 'Yoshi' dans la table ARRAY : " . recherche($liste, 'Yoshi'). '<hr>'; 
echo "position de 'Yoshi' dans la table ARRAY : " . recherche('ffdfdfdfdf', 'Yoshi'). '<hr>'; // à ce moment là, die() s'execute, le script s'arrête et tout les traitement suivant ne sont pas executé
echo 'Traitements........';
