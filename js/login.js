$(document).ready(function(){
	$("button#btnLogin").click( function() {
	 	if(( $("#inputEmail").val() == "") || ($("#inputPassword").val() == "" ))
	 		$("#formLogin div").addClass('has-error');
		else if {
			// Condição caso não há usuário existente
		} else {
			$.post( $("#formLogin").attr("action"), $("#formLogin :input").serializeArray(), function(data) {
					$("#pLogout").html(data);
					$("#formLogin").hide(400);
					$("#divSignup").hide(400);
					$('#formLogout').show(400);
			});
		 
			$("#formLogin").submit( function() {
				return false;	
			});
		}
	});
});