<?php
	// Finaliza a sessão do usuário e redireiona para a página principal
	session_start();
	$user = $_SESSION['inputEmail'];
	session_destroy();
	var_dump($user);
	if (isset($_COOKIE[$user])){
		unset($_COOKIE[$user]);
	}
	header("Location: ../index.php");
?>