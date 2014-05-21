<?php
	require_once('connect.php'); 
	// seta as variaveis com o que veio do POST
	$login = $_POST['inputEmail'];
	$passw = md5($_POST['inputPassword']);

	// Verifica se o sistema enviou os dados do POST com os campos em branco
	if( empty($login) || empty($passw) )
		$msg = "Username and Password Mandatory - from PHP";
	else{
		// Realiza o SELECT e cria uma sessão para o usuário
		$sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE login = '$login' and senha = '$passw'") or die(mysqli_error());
		$row = mysqli_num_rows($sql);

		if($row > 0){
			session_start();
			$_SESSION['inputEmail'] = $_POST['inputEmail'];
			$_SESSION['inputPassword'] = $_POST['inputPassword'];

			setcookie('user', $_POST['inputEmail'], time()+3600);

			echo $_SESSION['inputEmail'];
		}else{
			// Avisa o usuário que o email ou senha informados estão incorretos
			echo "E-mail or password invalid - from PHP";
		}
	}
?>
