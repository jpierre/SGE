<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style2.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/sistema.css" type="text/css" media="screen" charset="utf-8" />
<title>Documento sin título</title>
<style>
body {
	background-color: #f2f2f2;
}
#sistema {
	margin: 0 auto;
	padding: 0 8px 12px !important;
	background: #FFF;
	width: 960px;
	height: 800px;
	-webkit-box-shadow: 0 8px 10px rgba(0,0,0, .7);
	-moz-box-shadow: 0 8px 10px rgba(0, 0, 0, 0.7);
	box-shadow: 0 8px 10px rgba(0, 0, 0, 0.7);
}
#logo {
	width: 840px;
	position: relative;
	height: 147px;
}
#logo #logo_text {
	position: absolute;
	top: 27px;
	left: 0;
}
#logo h1, #logo h2 {
	font: normal 300% 'century gothic', arial, sans-serif;
	border-bottom: 0;
	text-transform: none;
	margin: 0;
}
#logo_text h1, #logo_text h1 a, #logo_text h1 a:hover {
	padding: 8px 0 0 0;
	color: #CCC;
	text-decoration: none;
}
#logo_text h1 a .logo_colour {
	color: #40D8FE;
}
#logo_text h2 {
	font-size: 120%;
	padding: 4px 0 0 0;
	color: #B7B9A7;
}
/* Some stylesheet reset */
#cssmenu > ul {
	list-style: none;
	margin: 0;
	padding: 0;
	vertical-align: baseline;
	line-height: 1;
}
/* The container */
#cssmenu > ul {
	display: block;
	position: relative;
	width: 150px;
}
/* The list elements which contain the links */
#cssmenu > ul li {
	display: block;
	position: relative;
	margin: 0;
	padding: 0;
	width: 150px;
}
/* General link styling */
#cssmenu > ul li a {
	/* Layout */
	display: block;
	position: relative;
	margin: 0;
	border-top: 1px dotted #fff;
	border-bottom: 1px dotted #d9d9d9;
	padding: 11px 20px;
	width: 110px;
	/* Typography */
	font-family: Helvetica, Arial, sans-serif;
	color: #3dafea;
	text-decoration: none;
	text-transform: uppercase;
	text-shadow: 0 1px 0 #fff;
	font-size: 13px;
	font-weight: 300;
	/* Background & effects */
	background: #eaeaea;
}
/* Rounded corners for the first link of the menu/submenus */
#cssmenu > ul li:first-child>a {
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	border-top: 0;
}
/* Rounded corners for the last link of the menu/submenus */
#cssmenu > ul li:last-child>a {
	border-bottom-left-radius: 4px;
	border-bottom-right-radius: 4px;
	border-bottom: 0;
}
/* The hover state of the menu/submenu links */
#cssmenu > ul li>a:hover, #cssmenu > ul li:hover>a {
	color: #fff;
	text-shadow: 0 1px 0 rgba(0, 0, 0, .3);
	background: #54cdf1;
	background: -webkit-linear-gradient(bottom, #54cdf1, #74d7f3);
	background: -ms-linear-gradient(bottom, #54cdf1, #74d7f3);
	background: -moz-linear-gradient(bottom, #54cdf1, #74d7f3);
	background: -o-linear-gradient(bottom, #54cdf1, #74d7f3);
	border-color: transparent;
}
/* The arrow indicating a submenu */
#cssmenu > ul .has-sub>a::after {
	content: '';
	position: absolute;
	top: 16px;
	right: 10px;
	width: 0px;
	height: 0px;
	/* Creating the arrow using borders */
	border: 4px solid transparent;
	border-left: 4px solid #3dafea;
}
/* The same arrow, but with a darker color, to create the shadow effect */
#cssmenu > ul .has-sub>a::before {
	content: '';
	position: absolute;
	top: 17px;
	right: 10px;
	width: 0px;
	height: 0px;
	/* Creating the arrow using borders */
	border: 4px solid transparent;
	border-left: 4px solid #fff;
}
/* Changing the color of the arrow on hover */
#cssmenu > ul li>a:hover::after, #cssmenu > ul li:hover>a::after {
	border-left: 4px solid #fff;
}
#cssmenu > ul li>a:hover::before, #cssmenu > ul li:hover>a::before {
	border-left: 4px solid rgba(0, 0, 0, .25);
}
/* THE SUBMENUS */
#cssmenu > ul ul {
	position: absolute;
	left: 150px;
	top: -9999px;
	padding-left: 5px;
	opacity: 0;
	/* The fade effect, created using an opacity transition */
	-webkit-transition: opacity .3s ease-in;
	-moz-transition: opacity .3s ease-in;
	-o-transition: opacity .3s ease-in;
	-ms-transition: opacity .3s ease-in;
}
/* Showing the submenu when the user is hovering the parent link */
#cssmenu > ul li:hover>ul {
	top: 0px;
	opacity: 1;
}
#informacion {
	position: absolute;
	left: 80%;
	top: 7%;
	margin-left: 10px;
}
</style>
</head>

<body>
<div id="sistema">
  <div id='informacion'>
    <h4>Bienvenido <?php echo $this->session->userdata('nombres')." ".$this->session->userdata('apePat')." ".$this->session->userdata('apeMat'); ?></h4>
    <p><?php echo $this->session->userdata('idDNI'); ?></p>
  </div>
  <div id="logo">
    <div id="logo_text"> 
      <!-- class="logo_colour", allows you to change the colour of the text -->
      <h1><a href="#">Event<span class="logo_colour">system</span></a></h1>
      <h2>Sistema de gestion de eventos FIA.</h2>
    </div>
  </div>
  <div id='cssmenu'>
    <ul>
      <li class='has-sub'><?php echo anchor('inscripcion/inscribir/mostrarlo', 'Tus Datos'); ?></li>
      <li class='active'><a href='#'><span>Inscribete!</span></a>
        <ul>
          <li class='has-sub'><span><?php echo anchor('inscripcion/inscribir/index/1', 'VISION 2013'); ?></span> </li>
          <li class='has-sub'><span><?php echo anchor('inscripcion/inscribir/index/2', 'Cloud Google'); ?></span> </li>
        </ul>
      </li>
      <li class='has-sub'><a href='#'><span>Generar tu codigo QR!</span></a> </li>
      <li><a href='#'><span>Horario</span></a></li>
      <li class='last'><?php echo anchor('login/logout', 'Cerrar Sesion'); ?></li>
    </ul>
  </div>

<img src="../../css/224603_379844632117064_432694243_n.jpg" />
</div>
</body>
</html>









