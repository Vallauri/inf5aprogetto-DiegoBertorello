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
        <link href="css/serp.css" rel="stylesheet">
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
                                        <option>Gelaterie</option>
                                        <option>Fruttivendoli</option>
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

        <!-- Card -->
        <div class="container" style="margin-top: 65px;">
            <div class="row col-lg-12 d-flex justify-content-center ris">
                <div class="col-lg-2 col-12 bg-light image" style="border-radius:10px 0 0 10px;">
                    <a href="./homeAzienda.php"><img src="./img/neg1.jpg" class="img-fluid"></a>
                </div>
                <div class="col-lg-5 col-12 bg-light testo" style="height:150px; border-radius:0 10px 10px 0;">
                    <a href="./homeAzienda.php"><h3>Nome negozio</h3></a>
                    <p>Descrizione descrizione descrizione descrizione descrizione</p>
                </div>
            </div>

            <div class="row col-lg-12 d-flex justify-content-center ris">
                <div class="col-lg-2 col-12 bg-light" style="border-radius:10px 0 0 10px;">
                    <a href="./homeAzienda.php"><img src="./img/neg1.jpg" class="img-fluid"></a>
                </div>
                <div class="col-lg-5 col-12 bg-light" style="height:150px; border-radius:0 10px 10px 0;">
                    <a href="./homeAzienda.php"><h3>Nome negozio</h3></a>
                    <p>Descrizione descrizione descrizione descrizione descrizione</p>
                </div>
            </div>

            <div class="row col-lg-12 d-flex justify-content-center ris">
                <div class="col-lg-2 col-12 bg-light" style="border-radius:10px 0 0 10px;">
                    <a href="./homeAzienda.php"><img src="./img/neg1.jpg" class="img-fluid"></a>
                </div>
                <div class="col-lg-5 col-12 bg-light" style="height:150px; border-radius:0 10px 10px 0;">
                    <a href="./homeAzienda.php"><h3>Nome negozio</h3></a>
                    <p>Descrizione descrizione descrizione descrizione descrizione</p>
                </div>
            </div>
        </div>
        
        <?php 
            require "footer.php";
        ?>
    </body>
</html>