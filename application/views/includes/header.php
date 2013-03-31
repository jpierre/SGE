<!DOCTYPE HTML>
<html>

<head>
  <title>EventSystem</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen" charset="utf-8" />
   <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>css/style2.css" type="text/css" media="screen" charset="utf-8" /> -->
  
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
          <li><a href="<?php echo base_url(); ?>index.php/login/signup">Registrate</a></li>
		  <li><a>Contactenos</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/login/index">Login</a></li>
        </ul>
      </div>
    </div>