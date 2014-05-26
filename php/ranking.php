<?php
	// Solicita um conexão com o banco de dados para realizar o INSERT
	require_once("connect.php");

	// Prepara a QUERY para consultar registros no banco de dados
	$sql = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY pontos DESC") or die(mysqli_error());

    echo ("<ol>");
	while ( $result = mysqli_fetch_assoc($sql) ) {
		$nome = $result['nome'];
		$pontos = $result['pontos'];
      
		echo ('<li>'.strtoupper($nome).' - '.$pontos.'</li>');
	}
    echo ("</ol>");
?>