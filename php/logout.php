<?php
	// Finaliza a sessão do usuário e redireiona para a página principal
	session_start();
	session_destroy();
	header("Location: index.html");
?>