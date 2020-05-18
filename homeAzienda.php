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
        <link href="css/homeAzienda.css" rel="stylesheet">
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

        <div class="container col-lg-9">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Nome negozio</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 foto">
                    <img src="./img/neg1.jpg" class="img-fluid">
                </div>
                <div class="col-lg-6 map d-flex justify-content-center ">
                    <div class="col-lg-11 bg-light" id="map">
                       
                    </div>
                </div>
            </div>
            <div class="row riga">
                <div class="col-lg-6">
                    <div class="row">
                        <h5>Telefono: </h5>
                        <div id="tel">
                            <p>&nbsp +39 0123456789</p>
                        </div>
                    </div>
                    <div class="row">
                        <h5>Email: </h5>
                        <div id="email_az">
                            <p>&nbsp negozio@prova.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <h5>Indirizzo: </h5>
                        <div id="address_az">
                            <p>&nbsp Via Prova 11, Roma(RM)</p>
                        </div>
                    </div>
                    <div class="row">
                        <h5>Descrizione:</h5>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div id="desc" class="col-lg-11">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            In eget vehicula nulla. Quisque vehicula metus nec nulla ultrices, 
                            id ornare elit ultricies. Morbi imperdiet quam non ornare consectetur. 
                            Nulla rhoncus quam quam, sed vestibulum ante lacinia a nisi.
                        </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:black;background-color:#e50040">
                    <div class="row">
                        <h5>Recensioni:</h5>
                    </div>
                    <!--Recensioni-->
                    <div class="row d-flex justify-content-center">
                        <form action="setRec.php" method="POST">
                            <div class="col-lg-10 nick bg-light">
                                <h6 id="nick">SiUomo_00</h6>
                            </div>
                            <div class="col-lg-10 rec">
                                <input name="recensione" type="text" id="rec" placeholder="Scrivi una recensione..."></input>
                            </div>
                            <div class="col-lg-10 row">
                                <div class="col-lg-6">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <button id="commenta" class="btn btn-block" type="submit">Invia</button>
                                </div>
                            </div>
                        </form>    
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10 nick bg-light">
                            <h6 id="nick">SiUomo_00</h6>
                        </div>
                        <div class="col-lg-10 rec">
                            <p id="rec">commento commento commento commento commento</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10 nick bg-light">
                            <h6 id="nick">SiUomo_00</h6>
                        </div>
                        <div class="col-lg-10 rec">
                            <p id="rec">commento commento commento commento commento</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row col-lg-11">
                        <h5>Men&ugrave;:</h5>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div id="menu" class="col-lg-11">
                            -Piatto 12&euro;;<br>
                            -Piatto 14&euro;;<br>
                            -Piatto 32&euro;;<br>
                            -Piatto 21&euro;;<br>
                            -Piatto 11&euro;<br>
                        </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:black;background-color:#e50040">
                    <div class="row col-lg-11">
                        <h5>Orario:</h5>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div id="orario" class="col-lg-11">
                            Lun: chiuso<br>
                            Mar: 11-15 18-23<br>
                            Mer: 11-15 18-23<br>
                            Gio: 11-15 18-23<br>
                            Ven: 11-15 18-23<br>
                            Sab: 11-15 18-23<br>
                            Dom: 11-15 18-23<br>
                        </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:black;background-color:#e50040">

                    <!--Contact-->
                    <h5>Contatta via mail:</h5>
                    <div id="success" class="alert alert-success alert-dismissible">
                        Mail inviata con successo.
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <div id="alertEmail" class="alert alert-danger alert-dismissible">
                        <strong>Attenzione!</strong> Indirizzo mail errato o mancante.
                        <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
                    </div>
                    <div class="col-lg-6 col-12">
                        <input type="text" id="address"></input>
                    </div>
                    <div id="alertSubject" class="alert alert-danger alert-dismissible">
                        <strong>Attenzione!</strong> oggetto della mail mancante.
                        <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
                    </div>
                    <div class="col-lg-6 col-12">
                        <input type="text" id="object"></input>
                    </div>
                    <div id="alertText" class="alert alert-danger alert-dismissible">
                        <strong>Attenzione!</strong> Corpo della mail mancante.
                        <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
                    </div>
                    <div class="col-lg-12">
                        <textarea id="email" col="150" row="50" maxlength="255"></textarea>
                    </div>
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
        <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
        <script src="http://www.openstreetmap.org/openlayers/OpenStreetMap.js"></script>
        <script src="js/map_az.js"></script>
    </body>
</html>