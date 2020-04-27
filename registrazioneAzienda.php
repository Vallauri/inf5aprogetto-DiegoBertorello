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
                    <form action="controllaRegAzienda.php" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4> Nome Attività: </h4>   
                                <input id="nomeAttivita" name="nomeAttivita" type="text" placeholder="Nome attività">
                            </div>
                            <div class="col-lg-12">
                                <h4> Descrizione Attività: </h4>   
                                <textarea name="descAttivita" cols="60" rows="5" maxlength="255" placeholder="Descrizione Attività"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <h4> Password: </h4>   
                                <input name="pwdAttivita" type="password" placeholder="Password">
                            </div>
                            <div class="col-lg-6">
                                <h4> Conferma password: </h4>   
                                <input name="confpwdAttivita" type="password" placeholder="Conferma password">
                            </div>
                        </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:#e50040">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4> Email: </h4>   
                                <input name="emailAttivita" type="text" placeholder="Email attività">  
                            </div>
                            <div class="col-lg-6"> 
                                <h4> Indirizzo: </h4>  
                                <input name="indirizzoAttivita" type="text" placeholder="Indirizzo attività">
                            </div>
                            <div class="col-lg-6"> 
                                <h4> Telefono: </h4>  
                                <input name="telefonoAttivita" type="text" placeholder="Telefono attività">
                            </div>
                            <div class="col-lg-6"> 
                                <h4> Partita IVA: </h4>  
                                <input name="partitaIva" type="text" placeholder="Partita IVA">
                            </div>
                        </div>
                                <hr style="height:2px;border-width:0;color:black;background-color:#e50040">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4> Raggio di consegna(Km): </h4>  
                                <input name="raggioConsegna" type="number" placeholder="Raggio di consegna(Km)">
                            </div>
                            <div class="col-lg-6"> 
                                <h4> Categoria: </h4>
                                <select id="categorie">
                                    <option>Pizzeria</option>
                                    <option>Ristorante</option>
                                    <option>Panetteria</option>
                                    <option>Macelleria</option>
                                </select>
                            </div>
                            <div class="col-lg-8"> 
                                <h4> Orari Attività: </h4>  
                                <textarea id="orarioAttivita" name="orarioAttivita" cols="40" rows="10" maxlength="255" placeholder="Orario Attività"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-info btn-block login" type="submit">Registrati</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>