$(document).ready(function() {
    $('#btnSignup').click(function() {
        $('#jumboWelcome').hide(400);
        $('#jumboSignup').show(400);
    });
  
    $("#btnCadastrar").click( function() {
        $('#formCadastro input:text, password').each(function() {
            if($(this).val() == "")
                $("#formCadastro div").addClass('has-error');
            else{
                $.post( $("#formCadastro").attr("action"), $("#formCadastro :input").serializeArray(), function(data) {
                    $("#registered").html(data);
                    $("#jumboSignup").hide(400);
                    $("#jumboRegistered").show(400);
                });
            }
        });    
    });

    $('#btnCancelar').click(function() {
        $('#jumboWelcome').show(400);
        $('#jumboSignup').hide(400);
        return false;
    });

    $('#btnLimpar').click(function() {
        $('#formCadastro').trigger('reset');
        return false;
    });
});
