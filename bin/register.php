<?php
	// dive essere la prima cosa nella pagina, aprire la sessione
	include("../bin/db_conn.php"); // includo il file di connessione al database
	if($_POST["username"] != "" && $_POST["password"]!= "" && $_POST["email"] != ""){ // se i parametri iscritto non sono vuoti non sono vuote
		$query = mysql_query("SELECT email FROM user WHERE email = '".$_POST["email"]."'") or die('Errore: ' . mysql_error());
		$conta = mysql_num_rows($query);
		if ($conta == 0) 
		{
			$password = @sha1($_POST["password"]);
			$query_registrazione = mysql_query("INSERT INTO user (email,password,username) VALUES ('".$_POST["email"]."','".$password."','".$_POST["username"]."')") // scrivo sul DB questi valori
			or die ("query di registrazione non riuscita".mysql_error()); // se la query fallisce mostrami questo errore
		}else{
			return false;
		}
		if(isset($query_registrazione)){ //se la reg è andata a buon fine
			session_start();
			$_SESSION["logged"]=1; //restituisci vero alla chiave logged in SESSION
			header("location:../index.php");
		}else{
			echo "non ti sei registrato con successo"; // altrimenti esce scritta a video questa stringa
		}
	}else{
		header('location:../index.php?errore=Non hai compilato tutti i campi obbligatori'); // se le prime condizioni non vanno bene entra in questo ramo else
	}
?>