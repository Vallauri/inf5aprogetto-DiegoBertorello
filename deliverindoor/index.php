<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Deliverindoor</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">

        <!-- Javascript link-->
        <script src="js/header.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
        <?php 
            require "header.php";
        ?>

        <!--Carousel-->
        <section class="col-lg-11 caro">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <img class="d-block w-100" src="http://placehold.it/900x350" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/900x350" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="http://placehold.it/900x350" alt="Third slide">
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
        </section>
        <section class="search-sec col-lg-11">
            <div class="container">
                <form action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input type="text" class="form-control search-slt" placeholder="Inserisci nome dell'attivit&agrave...">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input type="text" class="form-control search-slt" placeholder="Inserisci la citt&agrave...">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control search-slt" id="exampleFormControlSelect1">
                                        <option>Pizzerie</option>
                                        <option>Ristoranti</option>
                                        <option>Panetterie</option>
                                        <option>Macellerie</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <button type="button" class="btn btn-danger wrn-btn">Cerca</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Icons Grid -->
        <section class="features-icons text-center" style="margin-bottom: 30px;">
            <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-6">
                    <div class="categ">
                        <img src="img/pizza.svg" title="Pizzerie">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6">
                    <div class="categ">
                        <img src="img/restaurant.svg" title="Ristoranti">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6">
                    <div class="categ">
                        <img src="img/bread.svg" title="Panetterie">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6">
                    <div class="categ">
                        <img src="img/meat.svg" title="Macellerie"> 
                    </div> 
                </div>
            </div>
            </div>
        </section>

        <!-- Card -->
        <!--<div class="container d-flex justify-content-center" style="margin-top: 5px;">
            <div class="col-lg-2 bg-light" style="border-radius:10px 0 0 10px;">
                <img src="http://placehold.it/150x150">
            </div>
            <div class="col-lg-5 bg-light" style="height:150px; border-radius:0 10px 10px 0;">
                <h3>Prova prova prova</h3>
                <p>Prova descrizione qwertyuiopojhgfdsascvbnmmjhgfdwerty</p>
            </div>
        </div>-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-300">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                            <a href="#">Prova negozio</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-300">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                            <a href="#">Prova negozio</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-300">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                            <a href="#">Prova negozio</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php 
            require "footer.php";
        ?>
    </body>
</html>