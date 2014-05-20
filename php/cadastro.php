<?php
	// Solicita um conexão com o banco de dados para realizar o INSERT
	require_once("connect.php");

	// Salva as informações em variaveis
	$login = mysqli_real_escape_string($conn, $_POST['login']);
	$password = mysqli_real_escape_string($conn, md5($_POST['password']));
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

	// Verifica se ja existe email cadatrado no banco
	$exist = mysqli_query($conn, "SELECT * FROM usuarios WHERE login='$login'");
	$count = mysqli_num_rows($exist);
	if ($count == 0) {
		// Prepara a QUERY para inserção do registro no banco de dados
		$insert = mysqli_query($conn, "INSERT INTO usuarios (nome, sobrenome, login, senha, pontos) 
			VALUES ('$name', '$lastname', '$login', '$password', 0)") or die(mysqli_error($conn));
		
		// Verifica se houve um erro ao realizar o INSERT
		if (isset($insert)) {
			echo "Cadastro realizado com sucesso";
		} else
			echo "Houve um erro ao realizar o cadastro";
	} else
		echo "O email $login ja existe em nosso banco de dados!";

	mysqli_close($conn);
?>