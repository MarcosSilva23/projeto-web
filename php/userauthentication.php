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
		$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE login = '$login' and senha = '$passw'") or die(mysqli_error());
		$qtd_rows = mysqli_num_rows($result);

		if(!$result){
			// Avisa o user que o email ou senha informados estão incorretos
			echo "E-mail or password invalid - from PHP";
		}else if($qtd_rows<1){
			// Avisa o user que não há ninguem cadastrado no db
			echo "Maybe the login entered isn't registred in our website";
		}else{
			// Retorna sucesso
			session_start();
			$_SESSION['inputEmail'] = $_POST['inputEmail'];
			$_SESSION['inputPassword'] = $_POST['inputPassword'];

			// Criar um cookie com o email do user e um tempo de timeout
			setcookie('user', $_POST['inputEmail'], time()+3600);

			// Cria um array com json para retornar ao jQuery
			for ($i=0; $i < $qtd_rows; $i++) { 
				$json[] = mysqli_fetch_assoc($result);
			}

			// Retorno no formato json legível
			echo json_encode($json, JSON_PRETTY_PRINT);
		}
	}
?>
