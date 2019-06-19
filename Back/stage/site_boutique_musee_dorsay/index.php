<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- lien bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="style.css">

    <!-- lien font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>laBoutique</title>
</head>

<body>

    <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-1"><i class="fas fa-phone"></i> 07 53 26 85 76</div>
                <div class="col-md-6"></div>
            </div>

            <div class="row">

                <div class="col-md-12">
                    
                        <!-- la barre de navigation -->
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="#">laBoutique</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"                  
                                data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                                <a class="nav-item nav-link" href="#">Differents produits</a>
                                <a class="nav-item nav-link" href="#">Catégories</a>
                                <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </div>
                        </div>
                    </nav>
                    
                </div>

            </div>

            <div class="row">


                           <!-- Debut du slider -->
                <div class="col-md-6 offset-3 mt-4">


                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                    <img src="images/slider1.jpg" class="d-block w-100" alt="...">
                                    </div>

                                    <div class="carousel-item">
                                    <img src="images/slider2.jpg" class="d-block w-100" alt="...">
                                    </div>

                                    <div class="carousel-item">
                                    <img src="images/slider3.jpg" class="d-block w-100" alt="...">
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
                </div>

                             <!-- fin du slider -->

                             <!-- images de gauche -->
                <!-- <div class="col-md-3 offset-1">
                    <div class="row col-md-3">
                        <img src="images/vente-chaude-1-pc-bronze-paris-tour-eiffel.jpg" alt="" class="img_evenement">
                        <img src="images/t_shirt_souvenirs_de_tour_eiffel_de_paris_france_de-r75b00454ee9c46319cd0dc0b38b57173_65yeu_200.jpg" alt="" class="img_evenement">
                    </div>
                    <div class="row col-md-3">
                        <img src="images/t_shirt_souvenirs_de_tour_eiffel_de_paris_france_de-r75b00454ee9c46319cd0dc0b38b57173_65yeu_200.jpg" alt="" class="img_evenement">
                        <img src="images/vente-chaude-1-pc-bronze-paris-tour-eiffel.jpg" alt="" class="img_evenement">
                    </div>                
                    
                </div> -->
            </div>
            <hr>
                        <!-- Fin images de gauche -->

                        <!-- les cards -->
            <main>

                <div class="row text-center offset-6">
                     <h5 class="btn btn-danger clo-md-6"> Nos Produits</h5>
                </div>
                <hr>
                    <!-- ------------------------- -->

                <div class="row">
                    <div class="col-md-2 offset-2">
                                <div class="card bg-danger" style="width: 18rem;">
                                    <img src="images/1coussinT.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"></p>
                                            <a href="#" class="btn btn-dark ml-2">Voir les details du produit</a>
                                        </div>
                                </div>
                            </div>
                            

                            <!-- -------------------------------- -->

                            <div class="col-md-2 ml-4">
                                <div class="card bg-danger" style="width: 18rem;">
                                    <img src="images/2coussin.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"></p>
                                            <a href="#" class="btn btn-dark ml-2">Voir les details du produit</a>
                                        </div>
                                </div>
                            </div>

                            <!-- ---------------------------------->

                            <div class="com-md-2 ml-4">
                                <div class="card bg-danger" style="width: 18rem;">
                                    <img src="images/3mug2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"></p>
                                            <a href="#" class="btn btn-dark ml-2">Voir les details du produit</a>
                                        </div>
                                </div>
                            </div>

                            <!-- ---------------------------->

                            <div class="col-md-2 ml-4">                   
                                <div class="card bg-danger" style="width: 18rem;">
                                    <img src="images/4boule.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"></p>
                                            <a href="#" class="btn btn-dark ml-2">Voir les details du produit</a>
                                        </div>
                                </div>
                            </div>

                </div>
                <hr>
                <div class="row">


                            <div class="col-md-2 offset-2 ">
                                <div class="card bg-danger" style="width: 18rem;">
                                    <img src="images/5teeshirt.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"></p>
                                            <a href="#" class="btn btn-dark ml-2">Voir les details du produit</a>
                                        </div>
                                </div>
                            </div>

                            <!-- ---------------------------------- -->

                            <div class="col-md-2 ml-4">
                                <div class="card bg-danger" style="width: 18rem;">
                                    <img src="images/6mug.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"></p>
                                            <a href="#" class="btn btn-dark ml-2">Voir les details du produit</a>
                                        </div>
                                </div>
                            </div>

                            <!-------------------------------------------->

                            <div class="col-md-2 ml-4">
                                <div class="card bg-danger" style="width: 18rem;">
                                    <img src="images/7.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"></p>
                                            <a href="#" class="btn btn-dark ml-2">Voir les details du produit</a>
                                        </div>
                                </div>
                            </div>

                            <!-- --------------------------------------- -->

                            <div class="col-md-2 ml-4">
                                <div class="card bg-danger" style="width: 18rem;">
                                    <img src="images/8sac.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text"></p>
                                            <a href="#" class="btn btn-dark ml-2 text-center">Voir les details du produit</a>
                                        </div>
                                </div>
                            </div>
                        

                </div>
                <hr>
                            
                            
            </main>






    </div>


    <!-- librairie jquery de bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>