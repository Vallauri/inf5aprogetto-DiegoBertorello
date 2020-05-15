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
			
			$nome = $_POST['nome'];
			$cognome = $_POST['cognome'];
			$email = $_POST['email'];
			$user = $_POST['user'];
			$telefono = $_POST['telefono'];
			$pwd = $_POST['pwd'];
			$confpwd = $_POST['confPwd'];
			/*echo "$nome"."<br>";
			echo "$cognome"."<br>";
			echo "$email"."<br>";
			echo "$user"."<br>";
			echo "$telefono"."<br>";
			echo "$pwd"."<br>";
			echo "$confpwd"."<br>";
            $conn->close();*/
                

            if($pwd == $confpwd){
                $query = "INSERT INTO utenti(nome, cognome, username, pwd, email, telefono, img) VALUES ('$nome','$cognome','$user', '$pwd','$email','$telefono','');";
			$rs =$conn->query($query);
			
			$conn->close();
			//echo "Registrazione completata con successo!";
            }
            else{
                echo "Errore! Query non eseguita.";
            }
			
?>