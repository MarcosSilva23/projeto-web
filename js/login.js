$(document).ready(function() {
	var items = "";

	$("#btnLogin").click( function() {
	 	if( ($("#inputEmail").val() == "") || ($("#inputPassword").val() == "") ){
	 		$("#formLogin div").addClass('has-error');
	 	}
		else {
			$.ajax({
				  type: "POST",
				  url: $("#formLogin").attr("action"),
				  cache: false,
				  dataType: "json",
				  data: $("#formLogin :input").serializeArray(),
				  error: function() {
				    alert("some error");
				  },
				  success: function(retorno){
				  	if (retorno[0].erro) {
				  		alert(retorno[0].erro);
				  	}
				  	else{
				  		for (var i = 0; i < retorno.length; i++) {
				  			items += retorno[i].id + " - ";
				  			items += retorno[i].nome + " - ";
				  			items += retorno[i].sobrenome + " - ";
				  			items += retorno[i].login;
				  		}
				  		$("#formLogin").hide(400);
				  		$("#divSignup").hide(400);
				  		$("#pLogout").append(retorno[0].nome);
				  		$("#divLogout").show(400);
						// alert( "Data Saved: " + items );
				  	}
				  }
			});
		}
	});
});
