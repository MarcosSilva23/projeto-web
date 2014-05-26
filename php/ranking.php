<?php
	// Solicita um conexão com o banco de dados para realizar o INSERT
	require_once("connect.php");

	// Prepara a QUERY para consultar registros no banco de dados
	$sql = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY pontos DESC") or die(mysqli_error());
	$i = 0;
    // echo ("<ol class='list-group'>");
    echo "<table class='table table-striped'>";
    echo "<tread>";
    echo "<tr><th>#</th><th>Nome</th><th>Pontos</th></tr>";
    echo "</tread>";
    echo "<tbody>";

	while ( $result = mysqli_fetch_assoc($sql) ) {
		$nome = $result['nome'];
		$pontos = $result['pontos'];
      	
		// echo ("<li class='list-group-item'><span class='badge'>".$pontos."</span>".strtoupper($nome)."</li>");
		echo "<tr><th>".$i++."</th><th>".strtoupper($nome)."</th><th>".$pontos."</th></tr>";
	}
    // echo ("</ol>");
    echo "</tbody>";
    echo "</table>";
?>