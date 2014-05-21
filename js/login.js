$(document).ready(function(){
	$("#btnLogin").click( function() {
	 	if( ($("#inputEmail").val() == "") || ($("#inputPassword").val() == "") )
	 		$("#formLogin div").addClass('has-error');
		else {
			$.ajax({
				  type: "POST",
				  url: $("#formLogin").attr("action"),
				  data: $("#formLogin :input").serializeArray(),
				  success: function(data){
				        alert( "Data Saved: " + data );
				},
				  error: function(XMLHttpRequest, textStatus, errorThrown) {
				     alert("some error");
				}
			});
		}
	});
});
