//FUNCION PARA VALIDAR EL EMAIL AL INTENTAR RECUPERARLO
$(document).ready(function(){
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $('#vemail').focusout( function(){
        if( $("#vemail").val() == "" || !emailreg.test($("#vemail").val()) )
        {
            $('#msgEmail').html("<span style='color:#f00'>Ingrese un email correcto</span>");
        }else{
            $.ajax({
                type: "POST",
                url: "http://localhost/sge/seguridad/resetPwd/comprobar_email_ajax",
                data: "vemail="+$('#vemail').val(),
                beforeSend: function(){
                    $('#msgEmail').html('<span>Verificando...</span>');
                },
                success: function( respuesta ){
                    if(respuesta == '<div style="display:none">1</div>')
                        $('#msgEmail').html("<span style='color:#00BB3F'>Se encontro el email en la BD</span>");
                    else
                        $('#msgEmail').html("<span style='color:#FF0700'>El Email no se encuentra en la BD</span>");
                }
            });
            return false;
        }
    });
});

//FUNCION PARA EL LOGIN FLOTANTE
$(function() {
    var button = $('#loginButton');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#loginButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});

//VALIDAR EL CAMPO DNI EN SIGNUP_FORM
function validar(){

	var posicion=document.getElementById('tipodoc').options.selectedIndex; //posicion
	//var letra=document.getElementById('numerodoc').value;

	//alert(letra.length);
	//alert(document.getElementById('tipodoc').options[posicion].text); //valor



	if(document.getElementById('tipodoc').options[posicion].text=="DNI"){


	      if(document.getElementById('numerodoc').value.length==8){

	          return true;

	      }else{

	        alert("Ingrese correctamente el numero de DNI, contiene 8 digitos");
			
	       document.getElementById('numerodoc').value="";
		   document.getElementById('numerodoc').focus();
	      }

	return false;

	  }


	  if(document.getElementById('tipodoc').options[posicion].text=="VISA"){


	      if(document.getElementById('numerodoc').value.length==10 || document.getElementById('numerodoc').value.length==9){

	          return true;

	      }else{

	        alert("Ingrese correctamente el numero de VISA, contiene 10 o 9 digitos");

	       document.getElementById('numerodoc').value="";
		   document.getElementById('numerodoc').focus();
	      }



	  }



	  if(document.getElementById('tipodoc').options[posicion].text=="Carnet de extranjeria"){


	      if(document.getElementById('numerodoc').value.length==8){

	          return true;

	      }else{

	        alert("Ingrese correctamente el Carnet de extranjeria, contiene 11 digitos");

	        document.getElementById('numerodoc').value="";
		   document.getElementById('numerodoc').focus();
	      }



	  }

	}

//FUNCION PARA VALIDAR LOS MONTOS
function init() {
    document.getElementById("cant_cuotas").disabled = true;
}
function extranjero(radio){
    document.getElementById("cant_cuotas").disabled=(radio.value == 1)?true: false;
}


