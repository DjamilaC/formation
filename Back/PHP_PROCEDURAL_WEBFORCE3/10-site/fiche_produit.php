<?php
require_once("include/init.php");
require_once("include/header.php");

/*
    Exo: 
    1. réaliser la requete permettant de selectionner le produit par rapport à l'id_produit envoyé dans l'URL
    2. Associer une méthode pour rendre le résultat exploitable
    3.créer une fiche produit avec les informations du produit: photo / categorie / titre / description / couleur / taille /prix / public et un bouton d'ajout au panier

*/
if(isset($_GET['id_produit'])):

    $resultat =$bdd->prepare("SELECT * FROM produit WHERE id_produit = :id_produit ");
    $resultat->bindValue(':id_produit', $_GET['id_produit'], PDO::PARAM_STR);
    $resultat->execute();



    
    $produits = $resultat->fetch(PDO::FETCH_ASSOC);   
   

    // echo '<pre>'; print_r($produits); echo '</pre>';
?>
    <h1 class="display-4 text-center mt-4">DETAIL DU PRODUIT</h1>
    <div class="col-lg-8 mx-auto col-md-6 mb-4 fiche_produit">
        <div class="card h-100">
          <a href="fiche_produit.php?id_produit=<?= $produits['id_produit'] ?>"><img class="card-img-top" src="<?= $produits['photo'] ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title text-center">
              <a href="fiche_produit.php?id_produit=<?= $produits['id_produit'] ?>" class="alert-link text-dark"><?= $produits['titre']?></a>
            </h4><hr>
            <p class="card-text text-center"><?= $produits['categorie']?></p><hr>
            <h5 class="text-center"><?= $produits['prix']?> €</h5><hr>
            <p class="card-text text-center"><?= $produits['description']?></p><hr>
            <p class="card-text text-center"><?= $produits['couleur']?></p><hr>
            <p class="card-text text-center"><?= $produits['taille']?></p><hr>
            <p class="card-text text-center"><?= $produits['public']?></p>
                       

          </div>
          <div class="card-footer text-center">
            <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
            <a href="fiche_produit.php?id_produit=<?= $produits['id_produit'] ?>" class="alert-link text-dark">Ajouter au panier&nbsp;&nbsp;<i class="fas fa-search"></i></a>

          </div>
        </div>
      </div>       


<?php
else: // si l'indice id_produit n'est pas définit dans l'url, on redirige vers la boutique
    header("location: boutique.php");

endif;

require_once("include/footer.php");
