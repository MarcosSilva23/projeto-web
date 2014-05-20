$(function(){
	$('#aposte').click(function(){

		$.ajax({
			url: 'php/cadastro.php',
			type: 'POST',
			dataType: 'txt',
			success: function(resultado){
				// body...
				alert(resultado);
			}
		});

		return false;
	});
});