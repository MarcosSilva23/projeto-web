$(document).ready(function(){
	var url = "index.html";
	$("button#btnLogout").click(function() {
		$('body').load( url );
	});
});