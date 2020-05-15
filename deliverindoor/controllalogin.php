<?php
/*Connessione al server*/
$host="localhost";
$emailname="root";
$password="";
$db_nome="deliverindoor";
$tab_nome="utenti";
$conn = mysqli_connect($host, $emailname, $password, $db_nome) or die('Impossibile connettersi al server: ' . mysqli_error($conn));
mysqli_select_db($conn,"deliverindoor") or die ('Accesso al database non riuscito: '. mysqli_error($conn));

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

// lettura della tabella attività
/*$sql_att="SELECT * FROM attivita WHERE emailAttivita='$email' AND pwdAttivita='$password'";
$result_att=mysqli_query($conn,$sql_att);
$conta_att=mysqli_num_rows($result_att);*/

if($conta==1){ //Se la query da un risultato

    $row = $result->fetch_assoc();
    session_start();//Avvio la sessione
    
    /*Variabili di sessione*/
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['idUtente'] = $row['idUtente'];
     
    echo"Che smarmellata sto utente di nome ".$_SESSION['email'];
    echo "<br>I risultati trovati sono ".$conta;
    echo"Questo è il result: ".$row['email'];
    //session_destroy();
    header("Location: index.php");
}
else if($conta==0){//Se la query non da risultati
    
    $sql_att="SELECT * FROM attivita WHERE emailAttivita='$email' AND pwdAttivita='$password'";
    $result_att=mysqli_query($conn,$sql_att);
    $conta_att=mysqli_num_rows($result_att);
    
    if($conta_att==1){//Se la query per le attività da un risultato
        
    $row = $result_att->fetch_assoc();
    session_start();//Avvio la sessione
    
    /*Variabili di sessione*/
    $_SESSION['emailAttivita'] = $email;
    $_SESSION['passwordAttivita'] = $password;
    $_SESSION['idAttivita'] = $row['idAttivita'];
     
    echo"Cazzo si bro, sei un grande ".$_SESSION['emailAttivita'];
    echo "<br>I risultati trovati sono ".$conta_att;
    echo"<br>Questo è il result: ".$_SESSION['passwordAttivita']."<br> FHIGA (idAttivita)".$_SESSION['idAttivita'];
    //session_destroy();
    header("Location: index.php");
        
    }
    else if($conta_att==0){//Se la query per le attività non da nessun risultato
        echo"Oh cristo, non c'è nessuna session qui";
        echo "<br>I risultati trovati sono ".$conta_att;
        echo "<br>Identificazione non riuscita: nome utente o password errati <br />";
        echo "Torna a pagina di <a href=\"login.php\">login</a>";
    }
}
?>