$(document).ready(function() {
    $('button#btnSignup').click(function() {
        $('div#jumboWelcome').hide(400);
        $('div#jumboSignup').show(400);
    });
  
    $("button#btnCadastrar").click( function() {
        $('#formCadastro input:text, password').each(function() {
            if($(this).val() == "")
                $("#formCadastro div").addClass('has-error');
            else{
                $.post( $("#formCadastro").attr("action"), $("#formCadastro :input").serializeArray(), function(data) {
                    $("h3#registered").html(data);
                    $("#jumboSignup").hide(400);
                    $("#jumboRegistered").show(400);
                });
                // $("#formCadastro").submit( function() {
                //     return false;    
                // });
            }
        });    
    });

    $('button#btnCancelar').click(function() {
        $('div#jumboWelcome').show(400);
        $('div#jumboSignup').hide(400);
    });

    $('button#btnLimpar').click(function() {
        $('#formCadastro').trigger('reset');
    });
});