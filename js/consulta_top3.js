$('#top3').ready(function(){
	
	$.ajax({
		url: 'php/consulta_top3.php',
		type: 'POST',
		dataType: 'json'
	},
	function(resultado) {
		for (var i = 0; i < resultado.length; i++) {
			$('#').append($('<li>').append(resultado[i].nome + ' ' + resultado[i].pontos));
		};
	});
});