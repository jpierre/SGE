<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css" type="text/css" media="screen" charset="utf-8" />
<script type='text/javascript' src="<?php echo base_url(); ?>js/funciones.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/base64.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/sprintf.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jspdf.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jspdf.plugin.addimage.js"></script>
<title>Untitled Document</title>
<script type="text/javascript">

function generarPDF() {
	
	var nombre=document.getElementById('nom').value;
	var apepat=document.getElementById('apepat').value;
	var apemat=document.getElementById('apemat').value;
	var dni=document.getElementById('dni').value;
	var cod=document.getElementById('cod').value;
	var imagen=document.getElementById("laimagen");
	
	
	

	var doc = new jsPDF();
    doc.setFontSize(15);
	doc.setFont("times");
	
	doc.setLineWidth(0.5);
	doc.line(20, 25, 190, 25);
	
	doc.text(70,20, 'Universidad de San Martin de Porres')
	
	doc.text(20, 40, 'Nombre :' + " "+ nombre);
	doc.text(20, 50, 'Apellido : ' + " " + apepat + " " +apemat);
	doc.text(20, 60, 'DNI :' + " "+ dni);
	doc.text(20,70, 'Codigo :' + " "+ cod);
	doc.addImage(imagen,'JPEG', 80, 80, 50, 50);
	
	// Output as Data URI
	doc.output('datauri');
	
}


</script>
<style>
.content {
	margin-right: -1px;
} /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a {
	zoom: 1;
}  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]-->
</head>

<body onload="init()">
<div class="container">
<div class="header"><img src="<?php echo base_url(); ?>images/cabecera.png" width="1000" height="144" border="0"/> 
  <!-- end .header --></div>
