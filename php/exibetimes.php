<?php
	// Solicita um conexão com o banco de dados para realizar o INSERT
	require_once("connect.php");

	// Prepara a QUERY para consultar registros no banco de dados
	$sql = mysqli_query($conn, "SELECT * FROM times ORDER BY nome") or die(mysqli_error());
	$i = 0;
    echo "<table class='table table-striped'>";
    echo "<tread>";
    echo "<tr><th>Nome</th><th>Pontos</th><th>Derrotas</th><th>Vitorias</th><th>Empates</th><th>Partidas</th><th>Saldo de Gols</th></tr>";
    echo "</tread>";
    echo "<tbody>";

	while ( $result = mysqli_fetch_assoc($sql) ) {
		$nome = $result['nome'];
		$pontos = $result['pontos'];
		$derrotas = $result['derrotas'];
		$vitorias = $result['vitorias'];
		$empates = $result['empates'];
		$partidas = $result['partidas'];
		$saldo = $result['saldo-de-gols'];
      	
		echo "<tr><th>".$nome."</th><th>".$pontos."</th><th>".$derrotas."</th><th>".$vitorias."</th><th>".$empates."</th><th>".$partidas."</th><th>".$saldo."</th></tr>";
	}
    echo "</tbody>";
    echo "</table>";
?>