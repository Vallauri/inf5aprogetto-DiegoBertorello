<?php
	session_start();

    /*echo"ciao ".$_SESSION['idUtente'];
    echo"<br> Ehilà ".$_SESSION['idAttivita'];
    echo"<br> Questa è l'email dell'utente ".$_SESSION['email'];
    echo"<br> Questa è l'email dell'azienda ".$_SESSION['emailAttivita'];*/
	
	if(isset($_SESSION['idUtente'])){
        echo"<br><br><br>EI CAVALLO CIAO CAVALLO";
		$idUtente = $_SESSION['idUtente'];
	}
    else if(isset($_SESSION['idAttivita'])){
        echo"<br><br><br>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
        $idAzienda = $_SESSION['idAttivita'];
    }
	else{
		session_destroy();
		echo"<br><br><br>Noo, mister session no here";
	}
	
?>