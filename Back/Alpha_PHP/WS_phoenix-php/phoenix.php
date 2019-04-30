<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil Phoenix</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- link vers mon css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
        <header>
            <nav class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                    <a class="navbar-brand" href="#"><i class="fab fa-phoenix-framework"></i></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Phoenix <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Choisir une destination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Payer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </nav>
        </header>

        <main>
            <!-- slider------------------------------------------------------------ -->
                     
            <div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/caraibes.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/caraibes.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="img/caraibes.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
            
            <!-- btn choisir------------------------------------------ -->
            <div class="row">
                <button type="button" class="btn col-md-8 mx-auto btn-block btn-outline-success mb-4 text-center !">Choisir mon séjour tout de suite !</button>
            </div>
            
        </main>
        <hr>
        <div class="container"> 
                            <section>
                                <!-- slider -->
                                <!-- les cards -->
                                <div class="row mx-auto">
                                    <div class="card col-md-3 ml-5" style="width: 18rem;">
                                        <img src="img/caraibes_martinique_boucaniers.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5>Les Boucaniers</h5>
                                            <p class="card-text">Après les eaux
                                                calmes, partez à la découverte des spectaculaires cascades des gorges de la Falaise, à Trinité</p>
                                            <a href="#" class="btn btn-outline-info text-info col-md-12">Reserver maintenant</a>
                                        </div>
                                    </div>
                                    <div class="card col-md-3 offset-md-1" style="width: 18rem;">
                                        <img src="img/sicile_kamarina.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5>Kamarina</h5>
                                            <p class="card-text">Bienvenue au pays
                                                de l'Etna où ruelles escarpées et places en fleurs s'ouvrent sur la Méditerranée !.</p>
                                            <a href="#" class="btn btn-outline-info text-info col-md-12">Reserver maintenant</a>
                                        </div>
                                    </div>
                                    <div class="card col-md-3 offset-md-1" style="width: 18rem;">
                                        <img src="img/maldives_fino.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5> Finohlu</h5>
                                            <p class="card-text">Instants inoubliables sur
                                                une île privative où luxe et charme naturel des Maldives s'équilibrent à merveille.</p>
                                            <a href="#" class="btn btn-outline-info text-info col-md-12">Reserver maintenant</a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row mx-auto">
                                    <div class="card col-md-3 ml-5" style="width: 18rem;">
                                        <img src="img/maurice_albion.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5>Albion sauvage</h5>
                                            <p class="card-text">Au cœur de
                                                l’Ile, un swing au golf, l’adrénaline du trapèze volant ou la beauté des fonds marins ... que choisir ?.</p>
                                            <a href="#" class="btn btn-outline-info text-info col-md-12">Reserver maintenant</a>
                                        </div>
                                    </div>
                                    <div class="card col-md-3 offset-md-1" style="width: 18rem;">
                                        <img src="img/maldives_kani.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5>Kani</h5>
                                            <p class="card-text">Ile
                                                -jardin posée sur des eaux turquoises, découvrez le paradis au cœur de l'archipel des Maldives..</p>
                                            <a href="#" class="btn btn-outline-info text-info col-md-12">Reserver maintenant</a>
                                        </div>
                                    </div>
                                    <div class="card col-md-3 offset-md-1" style="width: 18rem;">
                                        <img src="img/grece_gregolimano.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5>Gregolimano</h5>
                                            <p class="card-text">L’île d’Eubée est un oasis entre mer et oliviers ... plongez dans les eaux azures de la mer Egée ... en ski nautique.</p>
                                            <a href="#" class="btn btn-outline-info text-info col-md-12">Reserver maintenant</a>
                                        </div>
                                    </div>
                                </div>
                                <br>                
                            </section>
                            <hr>
                                      <!--Information de reservation-->
                            <section>

                                <div class="row mx-auto">
                                        <div class="card-deck col-md-3 ml-1">
                                            <div class="card border-info">
                                                    <img src="img/caraibes_martinique_boucaniers.jpg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Les Boucaniers</h5>                            
                                                    </div>
                                                    <div class="card-footer bg-info">
                                                        <small class="text-muted">1semaine / personne : 750€</small>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="card border-info col-md-9">
                                            <div class="card-header text-center bg-info">Je complète mes informations de réservation &nbsp; <i class="fab fa-phoenix-framework"></i></div>
                                                <div class="card-body">                            
                                                    <form>
                                                        <div class="form-group">                                
                                                            <input type="email" class="form-control" id="email" aria-describedby="" placeholder="Email de confirmation">                                
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">                                
                                                                <input type="text" class="form-control" id="nb_semaine" placeholder="Je pars combien de semaines?">
                                                            </div>
                                                            <div class="form-group col-md-6">                            
                                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre de vacanciers">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-info col-md-12">Confirmer ma réservation</button>
                                                    </form> 
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <hr>
                                                <!-- petites images -->
                                <div class="row mx-auto"> 
                                        <div class="col-md-1 offset-md-1">
                                            <img src="img/caraibes.jpg"alt="..."> 
                                        </div>                                                                               
                                        <div class="col-md-1 offset-md-1">
                                            <img src="img/caraibes_martinique_boucaniers.jpg" class="image1" alt="...">
                                        </div>                                                                               
                                        <div class="col-md-1 offset-md-1">
                                            <img src="img/grece_gregolimano.jpg" class="image1" alt="...">
                                        </div>                                                                               
                                        <div class="col-md-1">
                                            <img src="img/maldives.jpg" class="image1" alt="...">
                                        </div>                                                                               
                                        <div class="col-md-1">
                                            <img src="img/maurice.jpg" class="image1" alt="...">
                                        </div>                                                                               
                                        <div class="col-md-1">
                                            <img src="img/sicile_kamarina.jpg" class="image1" alt="...">  
                                        </div>                                                                               
                                </div>

                            </section>

        </div><!--fin du container-->
        <hr>

        <!-- footer avec navigation -->

        <footer>
        <div class="container color-dark">
                <div class="row mb-4 pt-3 pb-3 text-center">
                    <a href="" class="footer text-secondary"> <i class="fas fa-umbrella-beach"></i> Vos vacances de reve ...</a>
                    <a href="" class="footer text-secondary"> <i class="fas fa-sun"></i>Plage ...</a>
                    <a href="" class="footer text-secondary"> <i class="fas fa-city"></i>Urbaine ...</a>
                    <a href="" class="footer text-secondary"><i class="fas fa-ship"></i>Croisière ...</a>
                    <a href="" class="footer text-secondary" > <i class="fas fa-mountain"></i>Montagne ...</a>
                    <a href="" class="footer text-secondary"><i class="fas fa-euro-sign"></i>A prix tout doux ...</a>
                </div>
            </div>
        
        </footer>
        <hr>

    </div> <!--FERMETURE container-fluid -->



    <!-- bibliotheque pour bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea 6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>