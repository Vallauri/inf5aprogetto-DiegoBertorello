<?php
    echo '
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="./index.php">
                    <img src="img/logo.png">
                </a>
                <div  id="navbarResponsive">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./personalArea.php">Area Personale</a>
                            <a class="dropdown-item" href="#">Segnalazioni</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Log out <i class="fas fa-sign-out-alt"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    ';
?>