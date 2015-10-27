<?

class functions{
	public function registra($password, $email) 
	{
	  $email = trim($email);
	  $password = trim($password);
	  if (strlen($email) == 0 || strlen($password) == 0) return false
	  else {
		$password = sha1($password);
		$query = @mysql_query("SELECT email FROM user WHERE email = '$email'") or die('Errore: ' . mysql_error());
		$conta = @mysql_num_rows($query);
		if ($conta == 0) 
		{
		  $risultato = @mysql_query("INSERT INTO user( password, email) VALUES ('$password','$email')") or die('Errore: ' .mysql_error());
		  return $risultato;
		}else{
		  return false;
		}
	  }
	}

	public function mostra_utente($id_utente) 
	{
	  $query = @mysql_query("SELECT nome_reale FROM iscritti WHERE id_utente = $id_utente") or die('Errore: ' . mysql_error());
	  $risultato = @mysql_fetch_object($query);
	  echo $risultato->nome_reale;
	}

	public function verifica_login($email_o_nome_utente, $password) 
	{
	  $password = @sha1($password);
	  $query = @mysql_query("SELECT id_utente FROM iscritti WHERE (email = '$email_o_nome_utente' OR nome_utente='$email_o_nome_utente') AND password = '$password'") or die('Errore: ' . mysql_error());
	  $conta = @mysql_num_rows($query);
	  if ($conta == 1) 
	  {
		$risultato = @mysql_fetch_object($query);
		$_SESSION['login'] = true;
		$_SESSION['id_utente'] = $risultato->id_utente;
		return TRUE;
	  }else{
		return FALSE;
	  }
	}

	public function verifica_sessione() 
	{
	  if(isset($_SESSION['login']))
	  {
		return $_SESSION['login'];
	  }else{
		return FALSE;
	  }
	}

	public function esci()
	{
	  $_SESSION['login'] = FALSE;
	  @session_destroy();
	  }
	}

	# metodo per la visualizzazione del nome utente
	public function mostra_username($id_utente) 
	{ 
	  # estrazione del dato sulla base dell'identificativo univoco memorizzato in sessione 
	  $query = @mysql_query("SELECT nome_utente FROM iscritti WHERE id_utente = $id_utente") or die(mysql_error()); 
	  $risultato = mysql_fetch_object($query);
	  # stampa a video del risultato 
	  echo $risultato->nome_utente; 
	}
}
?>