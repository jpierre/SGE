</div><!-- end login_form-->

<div class="content">
<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

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
<?php
  if($id_evento==1){
   	echo anchor('inscripcion/inscribir/registro_externo/1/1', 'Inscripbirte tu mismo').'<br />';
  	echo anchor('inscripcion/inscribir/registro_externo/1/2', 'Inscribir personas');
  }else{
  	echo anchor('inscripcion/inscribir/registro_externo/2/1', 'Inscripbirte tu mismo').'<br />';
  	echo anchor('inscripcion/inscribir/registro_externo/2/2', 'Inscribir personas');
  }
?> 

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