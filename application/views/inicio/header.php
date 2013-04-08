<!DOCTYPE HTML>
<html>
<head>
<title>EventSystem</title>
<meta name="description" content="website description" />
<meta name="keywords" content="website keywords, website keywords" />
<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style2.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/login.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/login.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
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
</head>

<body>
<div id="main">
<div id="header">
  <div id="logo">
    <div id="logo_text"> 
      <!-- class="logo_colour", allows you to change the colour of the text -->
      <h1><a href="index.html">Event<span class="logo_colour">System</span></a></h1>
      <h2>Sistema de gestion de eventos FIA.</h2>
    </div>
  </div>
  <div id="menubar">
    <ul id="menu">
      <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
      <li ><a href="<?php echo base_url(); ?>index.php/welcome">Inicio</a></li>
      <li><a href="#">Quienes Somos?</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/login/eventos">Eventos</a></li>
      <li class="selected"><a href="<?php echo base_url(); ?>index.php/login/signup">Registrate</a></li>
      <li><a>Contactenos</a></li>
      <li>
        <div id="loginContainer"> <a href="#" id="loginButton"><span>Login</span></a>
          <div style="clear:both"></div>
          <div id="loginBox">
            <form id="loginForm" action="<?php echo base_url();?>index.php/login/validate_credentials" method="post" accept-charset="utf-8">
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
              <span ><a href="#" >Olvidaste tu password?</a></span>
            </form>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
