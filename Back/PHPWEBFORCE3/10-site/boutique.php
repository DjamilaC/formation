<?php
require_once("include/init.php");
extract($_GET);
require_once("include/header.php");
?>
<!-- Page Content -->
<div class="container">

<div class="row">

  <div class="col-lg-3">

    <h1 class="my-4">Bienvenue dans la boutique!!!!</h1>
    <div class="list-group">
        <?php
            // Exo : 1.Requete de selection des categories distinctes en BDD
            //      2.Boucler  sur chaque catégorie et créer un lien
            $resultat = $bdd->query("SELECT DISTINCT categorie FROM produit");
            while($categorie  = $resultat->fetch(PDO::FETCH_ASSOC)):
                //echo '<pre>'; print_r($categorie_prod); echo'</pre>';
               
        ?>
        <a href="?categorie=<?= $categorie['categorie'] ?>" class="list-group-item alert-link text-dark text-center"><?= $categorie['categorie'] ?></a>
        <?php endwhile; ?>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="photo/slider1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="photo/slider2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="photo/tailleurs_femme.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

                     <!-------------les cards----------->
    <div class="row">
        <?php 
        if(isset($_GET['categorie'])):
            // si il ya une categorie dans l'url on affiche les produits associés
                $resultat =$bdd->prepare("SELECT * FROM produit WHERE categorie = :categorie ");
                $resultat->bindValue(':categorie', $_GET['categorie'], PDO::PARAM_STR);
                $resultat->execute();

             else://sinon, il n'ya pas de categorie dans l'URL, on selectionne tout les produits

                $resultat =$bdd->prepare("SELECT * FROM produit");
                $resultat->execute(); 

             endif; 

            while($produits = $resultat->fetch(PDO::FETCH_ASSOC)):
                // echo '<pre>'; print_r($produits); echo '</pre>';
        ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="fiche_produit.php?id_produit=<?= $produits['id_produit'] ?>"><img class="card-img-top" src="<?= $produits['photo'] ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title text-center">
              <a href="fiche_produit.php?id_produit=<?= $produits['id_produit'] ?>" class="alert-link text-dark"><?= $produits['titre']?></a>
            </h4>
            <h5><?= $produits['prix']?> €</h5>
            <p class="card-text"><?= $produits['description']?></p>
          </div>
          <div class="card-footer text-center">
            <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
            <a href="fiche_produit.php?id_produit=<?= $produits['id_produit'] ?>" class="alert-link text-dark">Voir le détail&nbsp;&nbsp;<i class="fas fa-search"></i></a>

          </div>
        </div>
      </div>            
            <?php endwhile; ?>

        
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->












































<?php 
require_once("include/footer.php");
?>