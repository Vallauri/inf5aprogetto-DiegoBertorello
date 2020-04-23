<?php
    echo '
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Deliverindoor</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <div class="buscar-caja"> 
                                <input type="text" name="" class="buscar-txt" placeholder="Search ....."/> 
                                <a class="buscar-btn"> <i class="fa fa-search"></i> </a> 
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Area Personale</a>
                                <a class="dropdown-item" href="#">Segnalazioni</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    ';
?>