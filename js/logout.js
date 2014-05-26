$(document).ready(function(){
	var url = "index.php";
	$("#btnLogout").click(function() {
		$('body').load( url );
		preparapagina();
	});
});