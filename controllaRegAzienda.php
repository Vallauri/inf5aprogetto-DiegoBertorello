		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "deliverindoor";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password,$db);
			// Check connection
			if (!$conn) {
			   die("Connection failed: " . mysqli_connect_error());
			}
			
			$nomeAttivita = $_POST['nomeAttivita'];
			$descAttivita = $_POST['descAttivita'];
			$emailAttivita = $_POST['emailAttivita'];
			$indirizzoAttivita = $_POST['indirizzoAttivita'];
			$telefonoAttivita = $_POST['telefonoAttivita'];
			$partitaIva = $_POST['partitaIva'];
			$raggioConsegna = $_POST['raggioConsegna'];
			$categoriaAttivita = $_POST['categorie'];
			$pwdAttivita = $_POST['pwdAttivita'];
			$confpwdAttivita = $_POST['confpwdAttivita'];
			//echo($pwd);
                

            if($pwdAttivita == $confpwdAttivita){
                $query = "INSERT INTO attivita(nomeAttivita, telefono, emailAttivita, pwdAttivita, indirizzo, raggioConsegna, partitaIva, orariAttivita, imgAttivita, categoriaAttivita, descrizioneAttivita) VALUES ('', ,'', '','', , '', '','', '');";
			$rs =$conn->query($query);
			
			$conn->close();
			header("Location: login.php");
            }
            else{
                echo "Identificazione non riuscita: nome utente o password errati <br />";
                echo "Torna a pagina di <a href=\"registrazioneAzienda.php\">Registrazione Azienda</a>"; 
            }
			
?>