<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="css/login.css" rel="stylesheet">
        

    </head>
    <body>
        <div class="container">
            <div class="login-container">
                <div id="output"></div>
                <div class="avatar"></div>
                <div class="form-box">
                    <form action="controllalogin.php" method="POST">
                        <input name="email" type="text" placeholder="Email">
                        <input name="pwd" type="password" placeholder="Password">
                        <button class="btn btn-info btn-block login" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>