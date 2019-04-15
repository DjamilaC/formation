
<?php
require_once("../include/init.php");
extract($_POST);


// si l'internaute n'est pas connecté et n'est pas ADMIN, il n'a rien à faire ici, on le redirige vers la page connexion.php
if(!internauteEstConnecteEstAdmin())
{
    header("Location:" . URL . "connexion.php"); 
}

//-----------ENREGISTREMENT PRODUIT-------------------------

if($_POST)
{
    $photo_bdd = '';
    if(!empty($_FILES['photo']['name']))
    {
        $nom_photo = $reference . '-' . $_FILES['photo']['name'];
        echo $nom_photo . '<br>';

        $photo_bdd = URL . "photo/$nom_photo";
        echo $photo_bdd . '<br>';

        $photo_dossier = RACINE_SITE . "photo/$nom_photo";
        echo $photo_dossier . '<br>';

        copy($_FILES['photo']['tmp_name'], $photo_dossier);


    }
}

require_once("../include/header.php");
echo '<pre>'; print_r($_POST); echo'</pre>';
echo '<pre>'; print_r($_FILES); echo'</pre>';
// $_FILES: superglobale permet de véhiculer les informations d'un fichier uploader
?>

<!-- 
    1.Réaliser un formulaire permettant d'inserer un produit dans la table 'produit(sauf le champs: id_produit'
 -->
 <h1 class="col-md-6 offset-md-4 text-center" >AJOUT D'UN PRODUIT</h1>
 <form class="col-md-6 offset-md-4 form1" method="post" action="" enctype="multipart/form-data"> 
 <!-- enctype: obligatoire en PHP pour recolter les informations d'1 fichier uploadé -->

 <div class="form-group">
    <label for="reference">Référence</label>
    <input type="text" class="form-control" id="reference"  placeholder="Enter reference" name="reference">
    
  </div>
  <div class="form-group">
    <label for="categorie">Catégorie</label>
    <input type="text" class="form-control" id="categorie" aria-describedby="" placeholder="Enter categorie" name="categorie">    
  </div>
  <div class="row">
        <div class="form-group col-md-6">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" aria-describedby="" placeholder="Enter titre" name="titre">
            
        </div>
        <div class="form-group col-md-6">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" aria-describedby="" placeholder="enter description" name="description">
        </div> 
  </div>

 <div class="row">
        <div class="form-group col-md-6">
            <label for="couleur">Couleur</label>
            <input type="text" class="form-control" id="couleur" aria-describedby="" placeholder="couleur" name="couleur">    
        </div>

            
        <div class="form-group col-md-6">
            <label for="taille">Taille</label>
            <select class="form-control" id="taille">
                <option>choose</option>
                <option></option>
                <option></option>      
            </select>              
        </div>
</div>
  <div class="form-group">
    <label for="public">Public</label>
    <select class="form-control" id="public">
    <option value="mixte">Mixte</option>
      <option value="f">Feminin</option>
      <option value="m">Masculin</option>      
    </select>        
  </div>

<div class="row">
        <div class="form-group col-md-6">
            <label for="photo">Photo</label>
            <input type="file" class="form-control" id="photo" aria-describedby="" placeholder="" name="photo">    
        </div>
        
        <div class="form-group col-md-6">
            <label for="prix">Prix</label>
            <input type="text" class="form-control" id="prix" aria-describedby="" placeholder="Enter prix" name="prix">   
        </div>
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <input type="text" class="form-control" id="stock" aria-describedby="" placeholder="Enter stock" name="stock"> 
  </div>
  <button type="submit" class="btn btn-danger col-md-4 offset-md-4">Ajouter</button>
</form
 


















<?php
require_once("../include/footer.php");
?>