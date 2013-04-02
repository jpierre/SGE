<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventos</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style2.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/sistema.css" type="text/css" media="screen" charset="utf-8" />
<style>
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
  <p>Solo los registrados pueden acceder aca</p>
</div>
<div id="logo">
  <div id="logo_text"> 
    <!-- class="logo_colour", allows you to change the colour of the text -->
    <h1><a href="#">Event<span class="logo_colour">system</span></a></h1>
    <h2>Sistema de gestion de eventos FIA.</h2>
  </div>
</div>
