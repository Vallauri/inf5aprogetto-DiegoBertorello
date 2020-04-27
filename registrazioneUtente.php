<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="css/registrazioneAzienda.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="login-container col-lg-7">
                <div id="output"></div>
                <div class="avatar">
                    <!--<img src="./img/icona-negozio.jpg" class="img-fluid">-->
                </div>
                <div class="form-box">
                    <form action="controllaRegUtente.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Nome:</h4>   
                                <input name="nome" type="text" placeholder="Nome">
                            </div>
                            <div class="col-lg-6">
                                <h4>Cognome:</h4>   
                                <input name="cognome" type="text" placeholder="Cognome">
                            </div>
                            <div class="col-lg-6">
                                <h4> Email: </h4>   
                                <input name="email" type="text" placeholder="Email">  
                            </div>
                            <div class="col-lg-6"> 
                                <h4>Username:</h4> 
                                <div id="notifiche"></div>
                                <input name="user" type="text" placeholder="Username">
                            </div>
                            <div class="col-lg-6"> 
                                <h4> Telefono: </h4>  
                                <input name="telefono" type="text" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h4> Password: </h4>   
                                <input name="pwd" type="password" placeholder="Password">
                            </div>
                            <div class="col-lg-6">
                                <h4> Conferma password: </h4>   
                                <input name="confpwd" type="password" placeholder="Conferma password">
                            </div>
                        </div>
                        <button class="btn btn-info btn-block login" type="submit">Registrati</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
                    