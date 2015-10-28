<?php
	require 'functions.php';
	include("../bin/db_conn.php");
	$functions = new Functions;
	$userExists = $functions->verifica_login($_POST['email'], $_POST['password']);
	if($userExists){
		session_start();
		$_SESSION["logged"]=1; //restituisci vero alla chiave logged in SESSION
		header('location:../index.php'); // se le prime condizioni non vanno bene entra in questo ramo else
	}else{
		echo 'username e pass sbagliata';
	}
?>