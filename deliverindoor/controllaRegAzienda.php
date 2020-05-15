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
			$categoriaAttivita = $_POST['categoria'];
			$pwdAttivita = $_POST['pwdAttivita'];
			$confpwdAttivita = $_POST['confpwdAttivita'];
			$orariAttivita = $_POST['orarioAttivita'];
			//echo($pwd);
            /*echo "$nomeAttivita"."<br>";
            echo "$descAttivita"."<br>";
            echo "$emailAttivita"."<br>";
            echo "$indirizzoAttivita"."<br>";
            echo "$telefonoAttivita"."<br>";
            echo "$partitaIva"."<br>";
            echo "$raggioConsegna"."<br>";
            echo "$categoriaAttivita"."<br>";
            echo "$pwdAttivita"."<br>";
            echo "$confpwdAttivita"."<br>";
            echo "$orariAttivita"."<br>";
            echo "Sono stato bravo?"."<br>";*/
                
                /*Conrtrollo se l'indirizzo inserito esiste già*/
                $sql="SELECT * FROM attivita WHERE indirizzo = '$indirizzoAttivita'";
                $result=mysqli_query($conn,$sql);
                $conta=mysqli_num_rows($result);
                echo "$conta";

                 
                 if($conta == 0){
                $query = "INSERT INTO attivita(nomeAttivita, telefono, emailAttivita, pwdAttivita, indirizzo, raggioConsegna, partitaIva, orariAttivita, imgAttivita, categoriaAttivita, descrizioneAttivita) VALUES ('$nomeAttivita', $telefonoAttivita, '$emailAttivita', '$pwdAttivita', '$indirizzoAttivita', $raggioConsegna, '$partitaIva', '$orariAttivita', '', '$categoriaAttivita', '$descAttivita');";
                $rs =$conn->query($query);
			
			$conn->close();
			//header("Location: login.php");
                     //echo $conta;
            }
            else{
                echo "Identificazione non riuscita: nome utente o password errati <br />";
                echo "Torna a pagina di <a href=\"registrazioneUtente.php\">Registrazione Utente</a>"; 
                /*echo "$raggioConsegna"."<br>";
                echo "$conta"."<br>";
                echo "NOME ATTIVITA: "."$nomeAttivita";*/
                //echo $rs =$conn->query($query);
            }
			
?>