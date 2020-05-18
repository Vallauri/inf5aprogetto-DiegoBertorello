<?php
$host="localhost";
$emailname="root";
$password="";
$db_nome="deliverindoor";
$conn = mysqli_connect($host, $emailname, $password, $db_nome) or die('Impossibile connettersi al
server: ' . mysqli_error($conn));
mysqli_select_db($conn,"deliverindoor") or die ('Accesso al database non riuscito: '. mysqli_error($conn));

$sql = "INSERT INTO recensioni(idUtente, idAttivita, nickname, descrizione) VALUES (1,1,'Si_Uomo', 'qwerty');";
$rs =$conn->query($sql);
echo 'inserito';
			
$conn->close();
//header("Location: homeAzienda.php");
?>