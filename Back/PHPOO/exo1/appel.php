<?php
//j'appelle ma classe Etudiant
require_once 'Etudiant.php';

// j'instancie ma classe
$etudiant = new Etudiant;
$etudiant->setPrenom('Djamila');
$etudiant->setNom('CHABANE');
$etudiant->setEmail('djamila.chabane@lepoles.com');
$etudiant->setTelephone('0753268576');

$e = $etudiant->getInfos();
//-----------
$etudiant1 = new Etudiant;
$etudiant1->setPrenom('Emma');
$etudiant1->setNom('LEMBOUB');
$etudiant1->setEmail('lemboubdjamila@gmail.com');
$etudiant1->setTelephone('0753268576');

$e1 = $etudiant1->getInfos();
//-----------
$etudiant2 = new Etudiant;
$etudiant2->setPrenom('Nadir');
$etudiant2->setNom('CHABANE');
$etudiant2->setEmail('djamila.chabane@lepoles.com');
$etudiant2->setTelephone('0615564564');

$e2 = $etudiant2->getInfos();
// -----appel de la fonction getInfos() pour eviter de réecrire tout les getteurs
// $etudiant->getPrenom();
// $etudiant->geNom();
// $etudiant->getTelephone();
// $etudiant->getEmail();

?>
<h2> Etudiant : <?= $e['prenom'] . ' ' . $e['nom'] ?></h2>
Prénom : <?= $e['prenom'] ?><br>
Nom : <?= $e['nom'] ?><br>
Email : <?= $e['email'] ?><br>
Téléphone :<?= $e['telephone'] ?><br>

<h2> Etudiant : <?= $e1['prenom'] . ' ' . $e1['nom'] ?></h2>
Prénom : <?= $e1['prenom'] ?><br>
Nom : <?= $e1['nom'] ?><br>
Email : <?= $e1['email'] ?><br>
Téléphone :<?= $e1['telephone'] ?><br>

<h2> Etudiant : <?= $e2['prenom'] . ' ' . $e2['nom'] ?></h2>
Prénom : <?= $e2['prenom'] ?><br>
Nom : <?= $e2['nom'] ?><br>
Email : <?= $e2['email'] ?><br>
Téléphone :<?= $e2['telephone'] ?><br>