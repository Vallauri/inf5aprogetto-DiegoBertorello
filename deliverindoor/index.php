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
        <div class="container d-flex justify-content-center">
            <div  class="col-lg-10">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
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
        </div>

        <!-- Icons Grid -->
        <section class="features-icons bg-light text-center">
            <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categ">
                        <img src="img/pizza.svg" title="Pizzerie">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categ">
                        <img src="img/restaurant.svg" title="Ristoranti">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categ">
                        <img src="img/bread.svg" title="Panetterie">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categ">
                        <img src="img/meat.svg" title="Macellerie"> 
                    </div> 
                </div>
            </div>
            </div>
        </section>

        <?php 
            require "footer.php";
        ?>
    </body>
</html>