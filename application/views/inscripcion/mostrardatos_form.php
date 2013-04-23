

<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">
<div class="content">

<div id="container" class="ltr">

<form id="form6" name="form6" action="<?php echo base_url();?>index.php/inscripcion/c_inscripcion/registar_inscrip/" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<header id="header" class="info">
<h2>Bienvenidos! Eventos FIA ! </h2>
<div>SGE es un proyecto para el curso de DIS enfocado a las necesitades de nuestra facultad.</div>
</header>

<ul>
	<li id="foli112" class="notranslate first section      ">
	<section>
	
	  <h1>Inscribir un nuevo participante</h1>
  <form action="<?php echo base_url();?>index.php/login/create_member" method="post" accept-charset="utf-8">
    <fieldset>
      <legend>Datos del Participante</legend>
      <label>Nombre </label>
      <input type="text" value="<?php echo $this->session->userdata('id'); ?>" />
      </br>
      <label>Apellido Paterno </label>
      <input type="text" value="<?php echo $this->session->userdata('id'); ?>" />
      </br>
      <label>Apellido Materno</label>
      <input type="text" value="<?php echo $this->session->userdata('id'); ?>" />
      </br>
    </fieldset>
    <p>
    <p>&nbsp;</p>
    </p>
    <p>
      <input type="submit" name="submit" value="Inscribir"  />
    </p>
    </fieldset>
  </form>
	
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
	</li>
	<li id="foli458" class="notranslate       ">
		<label class="desc" id="title458" for="Field458">Seleccionar una opción</label>
		<div>
			<select id="Field458" name="Field458" class="field select medium" tabindex="1" > 
			<option value="Seleccione" selected="selected"> Seleccione</option>
			<option value="Muy Bueno" >	Muy Bueno</option>
			<option value="Bueno" > Bueno</option>
			<option value="Regular" > Regular</option>
			<option value="Malo" > Malo</option>
			<option value="Muy Malo" > Muy Malo</option>
			</select>
		</div>
	</li>
	<li class="buttons ">
	<div>
		<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Enviar"/></div>
	</li>
</ul>
</form> 
			
			</div><!--container-->
<!-- end .content --></div>