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
			
            $cnt = $_POST['contatore'];
			//echo"$cnt";

                
            if($cnt==0){
                $sql="SELECT * FROM attivita ORDER BY idAttivita DESC LIMIT 1;";
                $rs =$conn->query($sql);
                $modifica = $rs->fetch_assoc();
                $id = $modifica['idAttivita'];
				$nome = $modifica['nomeAttivita'];
				$desc = $modifica['descrizioneAttivita'];
                        
                        echo ";$id;";
                        echo "$nome;";
                        echo "$desc";
            }else if($cnt==1){
                $sql="SELECT * FROM (SELECT * FROM attivita ORDER BY idAttivita DESC LIMIT 2) att ORDER BY idAttivita LIMIT 1;";
                $rs =$conn->query($sql);
                $modifica = $rs->fetch_assoc();
                $id = $modifica['idAttivita'];
				$nome = $modifica['nomeAttivita'];
				$desc = $modifica['descrizioneAttivita'];
                        
                        echo ";$id;";
                        echo "$nome;";
                        echo "$desc";
            }else if($cnt==2){
                $sql_tre="SELECT * FROM (SELECT * FROM attivita ORDER BY idAttivita DESC LIMIT 3) att ORDER BY idAttivita LIMIT 1;";
                $rs =$conn->query($sql_tre);
                $modifica = $rs->fetch_assoc();
                $id = $modifica['idAttivita'];
				$nome = $modifica['nomeAttivita'];
				$desc = $modifica['descrizioneAttivita'];
                        
                        echo ";$id;";
                        echo "$nome;";
                        echo "$desc";
            }else if($cnt==3){
                $sql_tre="SELECT * FROM (SELECT * FROM attivita ORDER BY idAttivita DESC LIMIT 4) att ORDER BY idAttivita LIMIT 1;";
                $rs =$conn->query($sql_tre);
                $modifica = $rs->fetch_assoc();
                $id = $modifica['idAttivita'];
				$nome = $modifica['nomeAttivita'];
				$desc = $modifica['descrizioneAttivita'];
                        
                        echo ";$id;";
                        echo "$nome;";
                        echo "$desc";
            }else if($cnt==4){
                $sql_tre="SELECT * FROM (SELECT * FROM attivita ORDER BY idAttivita DESC LIMIT 5) att ORDER BY idAttivita LIMIT 1;";
                $rs =$conn->query($sql_tre);
                $modifica = $rs->fetch_assoc();
                $id = $modifica['idAttivita'];
				$nome = $modifica['nomeAttivita'];
				$desc = $modifica['descrizioneAttivita'];
                        
                        echo ";$id;";
                        echo "$nome;";
                        echo "$desc";
            }else if($cnt==5){
                $sql_tre="SELECT * FROM (SELECT * FROM attivita ORDER BY idAttivita DESC LIMIT 6) att ORDER BY idAttivita LIMIT 1;";
                $rs =$conn->query($sql_tre);
                $modifica = $rs->fetch_assoc();
                $id = $modifica['idAttivita'];
				$nome = $modifica['nomeAttivita'];
				$desc = $modifica['descrizioneAttivita'];
                        
                        echo ";$id;";
                        echo "$nome;";
                        echo "$desc";
            }
            
            $conn->close();

			
?>