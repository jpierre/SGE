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
<script type='text/javascript' src="<?php echo base_url(); ?>js/funciones.js" ></script>

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
          <li><a href="<?php echo base_url(); ?>seccion/inicio">Inicio</a></li>
          <li><a href="<?php echo base_url(); ?>seccion/nuestraFacultad">Nuestra Facultad</a></li>
          <li><a href="<?php echo base_url(); ?>seccion/eventos">Eventos</a></li>
          <li><a href="<?php echo base_url(); ?>login/signup">Registrate</a></li>
          <li class="selected"><a href="<?php echo base_url(); ?>seccion/contactanos">Contactanos</a></li>
          <li>
		    
         <div id="loginContainer"> <a href="#" id="loginButton"><span>Login</span><em></em></a>
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
            <input type="submit" id="login" value="Sign in" />
          </fieldset>
          <span ><a href="<?php echo base_url(); ?>seguridad/c_recuperarContrasenia/recuperarContrasenia" >Olvidaste tu password?</a></span>
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
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
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
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <h1>Facultad de Ingeniería y Arquitectura</h1>
       
       <article>
       <h2>Contactanos</h2>
       
       Central Telefonica: 2086000<br>
       	<table width="250" border="1">
			  <tr>
			    <td><b>Areas</b></td>
			    <td><b>Anexos</b></td>
			  </tr>
			  <tr>
			    <td>Secretaria de Decanato</td>
			    <td>1101</td>
			  </tr>
			  <tr>
			    <td>Esc. Prof. de Ing. Civil</td>
			    <td>1150</td>
			  </tr>
			  <tr>
			    <td>Esc. Prof. de Ing. Industrial</td>
			    <td>1162</td>
			  </tr>
			  <tr>
			    <td>Esc. Prof. de Ing. de Comp. y Sist.</td>
			    <td>1107</td>
			  </tr>
			  <tr>
			    <td>Esc. Prof. de Arquitectura</td>
			    <td>1118</td>
			  </tr>
		</table>
		
       </article>
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
