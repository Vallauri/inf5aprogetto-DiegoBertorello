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
        <link href="css/contact.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">

        <!-- Javascript link-->
        <script src="js/header.js"></script>
        

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

    </head>
    <body>
        <?php 
            require "header.php";
        ?>

        <div class="container">
            <div class="col-lg-8" id="cont">
                <div class="row">
                    <h1>Contattaci</h1>
                </div>
            </div>
            <div class="col-lg-7" id="cont">
                <div id="success" class="alert alert-success alert-dismissible">
                    Mail inviata con successo.
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                <div id="alertEmail" class="alert alert-danger alert-dismissible">
                    <strong>Attenzione!</strong> Indirizzo mail errato o mancante.
                    <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
                </div>
                <div class="row col-lg-7 col-12">
                    <h4>Inserisci il tuo indirizzo mail:</h4>
                </div>
                <div class="row col-lg-6 col-12">
                    <input type="text" id="address"></input>
                </div>
                <div id="alertSubject" class="alert alert-danger alert-dismissible">
                    <strong>Attenzione!</strong> oggetto della mail mancante.
                    <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
                </div>
                <div class="row col-lg-6 col-12">
                    <h4>Oggetto:</h4>
                </div>
                <div class="row col-lg-6 col-12">
                    <input type="text" id="object"></input>
                </div>
                <div id="alertText" class="alert alert-danger alert-dismissible">
                    <strong>Attenzione!</strong> Corpo della mail mancante.
                    <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
                </div>
                <div class="row col-lg-12 col-12">
                    <h4>Scrivi la mail:</h4>
                </div>
                <div class="row col-lg-12 col-12">
                    <textarea id="email" col="150" row="50" maxlength="255"></textarea>
                </div>
                <div class="row col-lg-12 col-12">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6 col-12">
                        <button id="send" class="btn btn-block send centro" type="submit">Invia</button>
                    </div>
                </div>
            </div>
        </div>
        
        <?php 
            require "footer.php";
        ?>

        <script src="js/contact.js"></script>
    </body>
</html>