<?php
	// Faz a conexao com o banco de dados
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "fifa";
	$conn = mysqli_connect($host, $user, $pass) or die(mysqli_error());
	mysqli_select_db($conn, $db) or die(mysqli_error());
?>