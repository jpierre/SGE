<?php $this->load->view('home/header');?>

<?php $this->load->view('home/left_side');?>



<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

<div class="content">
	<div id="container" class="ltr">
			
			<form id="form6" name="form6" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
			action="">
			
			<header id="header" class="info">
			<h2>Bienvenidos! Eventos FIA ! </h2>
			<div>SGE es un proyecto para el curso de DIS enfocado a las necesitades de nuestra facultad.</div>
			</header>
			
			<ul>
			<li id="foli112" class="notranslate first section      ">
			<section>
			<h3 id="title112">
			Tus datos registrados son:<br />
			<br />
			DNI					: <?php echo $this->session->userdata('idDNI'); ?><br>
			Nombre 				: <?php echo $this->session->userdata('nombres'); ?><br>
			Apellido Paterno	: <?php echo $this->session->userdata('apePat'); ?><br>
			Apellido Materno 	: <?php echo $this->session->userdata('apeMat'); ?><br>
			Telefono Fijo		: <?php echo $this->session->userdata('fijo'); ?><br>
			Celular				: <?php echo $this->session->userdata('celular'); ?><br>
			Correo				: <?php echo $this->session->userdata('correo'); ?><br>
			Direccion			: <?php echo $this->session->userdata('direccion'); ?><br>
			Usuario				: <?php echo $this->session->userdata('user'); ?>
			</h3>
			</section>
			</li>
			
			<li id="foli457" class="notranslate section      ">
			<section>
			<h3 id="title457">
			Porfavor, ayudenos a evaluar el Sistema.<br />
			<br />
			¿En términos generales, que le parecio el Sistema?
			</h3>
			</section>
			</li><li id="foli458" class="notranslate       ">
			<label class="desc" id="title458" for="Field458">
			Seleccionar una opción
			</label>
			<div>
			<select id="Field458" name="Field458" class="field select medium" tabindex="1" > 
			<option value="Seleccione" selected="selected">
			Seleccione
			</option>
			<option value="Muy Bueno" >
			Muy Bueno
			</option>
			<option value="Bueno" >
			Bueno
			</option>
			<option value="Regular" >
			Regular
			</option>
			<option value="Malo" >
			Malo
			</option>
			<option value="Muy Malo" >
			Muy Malo
			</option>
			</select>
			</div>
			</li> <li class="buttons ">
			<div>
			
			                    <input id="saveForm" name="saveForm" class="btTxt submit" 
			    type="submit" value="Enviar"
			 /></div>
			</li>
			
			<li class="hide">
			<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
			<input type="hidden" id="idstamp" name="idstamp" value="UMNzPMBJAKJDRS+yIF9KnTpg/3fM+9os4GLiBNShDgc=" />
			</li>
			</ul>
			</form> 
			
			</div><!--container-->
<!-- end .content --></div>

<?php $this->load->view('home/right_side');?>

<?php $this->load->view('home/footer');?>
