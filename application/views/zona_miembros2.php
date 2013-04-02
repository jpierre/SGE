<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style_inicio.css" type="text/css">
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]--></head>

<body style="background-color:#C5DCEA;">

<div class="container">
  <div class="header"><img src="<?php echo base_url(); ?>images/cabecera.png" width="1000" height="144" border="0"/> 
    <!-- end .header --></div>
  <div class="sidebar1">
  <!-- Start Menu Izquierdo -->
  <?php $this->load->view('menu_izquierdo');?>
   
      <!-- Fin menu izquierdo -->
    </div>
  <div class="content">
     <?php $this->load->view('contenido');?>
    <!-- end .content --></div>
    
	<div class="sidebar2">
    	<img src="<?php echo base_url(); ?>images/buho.jpg" border="0"/> 
	</div>
  <div class="footer">
    <img src="<?php echo base_url(); ?>images/pie.png" style="position:absolute; left:0px;" width="1000" height="72"/>
        <a href="http://www.facebook.com/dhermer" target="_blank"><img src="img/facebook_cloud.png" style="position:absolute; top:10px; left:850px;"/></a>
        <a href="http://www.twitter.com/dhermer" target="_blank"><img src="img/twitter_cloud.png" style="position:absolute; top:10px; left:915px;"/></a>
    
    
    <!-- end .footer --></div>
  <!-- end .container --></div>
  
 <script type='text/javascript' src='<?php echo base_url(); ?>js/jquery-1.7.2.min.js'></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/script.js"></script> 
  
</body>
</html>