<?php
$host="localhost";
$emailname="root";
$password="";
$db_nome="deliverindoor";
$tab_nome="utenti";
$conn = mysqli_connect($host, $emailname, $password, $db_nome) or die('Impossibile connettersi al
server: ' . mysqli_error($conn));
mysqli_select_db($conn,"deliverindoor") or die ('Accesso al database non riuscito: '
. mysqli_error($conn));
// acquisizione dati dal form HTML
$email = $_POST["email"];
$password = $_POST["pwd"];
// protezione per SQL injection
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);
 $passmd5 = md5($password);
// lettura della tabella utenti
$sql="SELECT * FROM utenti WHERE email='$email' AND pwd='$password'";
$result=mysqli_query($conn,$sql);
$conta=mysqli_num_rows($result);
if($conta==1){

    $row = $result->fetch_assoc();
    session_start();
    
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['idUtente'] = $row['idUtente'];
     
header("Location: index.php");
}
else {
echo "Identificazione non riuscita: nome utente o password errati <br />";
echo "Torna a pagina di <a href=\"login.php\">login</a>";
}
?>