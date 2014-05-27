<?php
	// Conecta no banco de dados e inicia uma sessão
	require_once("connect.php");
	session_start();
	if (isset($_SESSION["inputEmail"]) || (isset($_SESSION["inputPassword"]))) {
		echo"<script type='text/javascript'>";
		echo "alert('User is just logged.');";
		echo "</script>";
	}
?>