/*funcion ajax para comprobar si el email existe en la base de datos*/
$(document).ready(function(){
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $('#email').focusout( function(){
        if( $("#email").val() == "" || !emailreg.test($("#email").val()) )
        {
            $('#msgEmail').html("<span style='color:#f00'>Ingrese un email correcto</span>");
        }else{
            $.ajax({
                type: "POST",
                url: "http://localhost/validaciones_ajax/index.php/register/comprobar_email_ajax",
                data: "email="+$('#email').val(),
                beforeSend: function(){
                    $('#msgEmail').html('Verificando...');
                },
                success: function( respuesta ){
                    if(respuesta == '<div style="display:none">1</div>')
                        $('#msgEmail').html("<span style='color:#0f0'>Email disponible</span>");
                    else
                        $('#msgEmail').html("<span style='color:#f00'>Email no disponible</span>");
                }
            });
            return false;
        }
    });
});