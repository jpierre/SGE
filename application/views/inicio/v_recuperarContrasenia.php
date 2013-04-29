<!DOCTYPE HTML>
<html>

<head>
  <title>EventSystem</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen" charset="utf-8" />
 
 <link rel="stylesheet" href="<?php echo base_url(); ?>css/login.css" type="text/css" media="screen" charset="utf-8" />
 
<script type="text/javascript" src="<?php echo base_url(); ?>js/login.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script type="text/javascript">

// Login Form

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


</script>

<script type="text/javascript">
$(document).ready(function(){
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $('#vemail').focusout( function(){
        if( $("#vemail").val() == "" || !emailreg.test($("#vemail").val()) )
        {
            $('#msgEmail').html("<span style='color:#f00'>Ingrese un email correcto</span>");
        }else{
            $.ajax({
                type: "POST",
                url: "http://localhost/sge/seguridad/c_recuperarContrasenia/comprobar_email_ajax",
                data: "vemail="+$('#vemail').val(),
                beforeSend: function(){
                    $('#msgEmail').html('Verificando...');
                },
                success: function( respuesta ){
                    if(respuesta == '<div style="display:none">1</div>')
                        $('#msgEmail').html("<span style='color:#0f0'>OK</span>");
                    else
                        $('#msgEmail').html("<span style='color:#f00'>El Email no se encuentra en la BD</span>");
                }
            });
            return false;
        }
    });
});
</script>
 
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="#">Event<span class="logo_colour">system</span></a></h1>
          <h2>Sistema de gestion de eventos FIA.</h2>
          <img width="207" height="196" style="position: absolute; left: 277px; top: -5px; width: 109px; height: 97px;" id="buo" />
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">Inicio</a></li>
          <li><a href="#">Quienes somos?</a></li>
          <li><a href="<?php echo base_url(); ?>login/eventos">Eventos</a></li>
          <li><a href="<?php echo base_url(); ?>login/signup">Registrate</a></li>
          <li><a href="#">Contactanos</a></li>
          
          <li>
		  <!-- Login-->
        <div id="loginContainer"> <a href="#" id="loginButton"><span>Login</span></a>
      		<div style="clear:both"></div>
      		<div id="loginBox">
        		<form id="loginForm" action="<?php echo base_url();?>login/validate_credentials" method="post" accept-charset="utf-8">
		          	<fieldset id="body">
			            <fieldset>
				            <label for="email">Usuario</label>
				            <input type="text" name="username" id="email" />
			            </fieldset>
		            	<fieldset>
			              <label for="password">Password</label>
			              <input type="password" name="password" id="password" />
		            	</fieldset>
		            <input type="submit" id="login" value="Sign in" /><a href="#" >Olvidaste tu password?</a>
	          		</fieldset>
	          		
              </br>
                 <h3 style="font-size: 8pt; color:blue"><?php echo validation_errors(); ?></h3>
        		</form>
         
      </div>
    </div>
        
                 
          
          </li>
         
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Noticias</h3>
            <h4>Vision 2013</h4>
            <h5>Octubre 2013</h5>
            <p>Eventos vision.&nbsp;<a href="#">leer mas</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Eventos</h3>
            <ul>
              <li><a href="#">Vision 2013</a></li>
              <li><a href="#">Cloud Google</a></li>
              <li><a href="#">Android Developers</a></li>
              <li><a href="#">Desarrolo de juegos</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Buscar</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="../../../css/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
      
      
      <form action="<?php echo base_url();?>seguridad/c_recuperarContrasenia/validarEmail" method="post" accept-charset="utf-8">
        <h1>Recuperar Contraseña</h1>
        <p>&nbsp;</p>
        <h2>Ingrese un email valido</h2>
        
        <input type="text" name="vemail" value="" id="vemail"/>
        <input type="submit" name="envio" value="Recuperar" />
        <span id="msgEmail"></span>
      </form>
      <?php echo form_error('vemail'); ?> 
        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Inicio</a> | <a href="examples.html">Quienes somos?</a> | <a href="page.html">Eventos</a> | <a href="another_page.html">Registrate</a> | <a href="contact.html">Login</a></p>
      <p>Copyright &copy;:) | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> |</p>
    </div>
    <p>&nbsp;</p>
  </div>
</body>
</html>
