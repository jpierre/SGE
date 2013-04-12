

<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">
<div class="content">


<div id="container" class="ltr">

<form id="form6" name="form6" action="<?php echo base_url();?>index.php/inscripcion/inscribir/registar_inscrip/" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<header id="header" class="info">
<h2>Bienvenidos! Eventos FIA ! </h2>
<div>SGE es un proyecto para el curso de DIS enfocado a las necesitades de nuestra facultad.</div>
</header>

<ul>
	
	<li id="foli321" class="notranslate first section      ">
<section>
<h3 id="title321">
Datos de Ponencia
</h3>
</section>
</li><li id="foli4" class="notranslate      ">
<label class="desc" id="title4" for="Field4">
Nombre de Ponencia
<span id="req_4" class="req">*</span>
</label>
<div>
<input id="Field4" name="Field4" type="text" class="field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required />
</div>
</li><li id="foli328" 
class="notranslate      "><label class="desc" id="title328" for="Field328">
Descripcion
</label>

<div>
<textarea id="Field328" 
name="Field328" 
class="field textarea medium" 
spellcheck="true" 
rows="10" cols="50" 
tabindex="2" 
onkeyup=""
 ></textarea>

</div>
</li>
<li id="foli317" class="date notranslate      ">
<label class="desc" id="title317" for="Field317">
Fecha de Inicio
<span id="req_317" class="req">*</span>
</label>
<span>
<input id="Field317-1" name="Field317-1" type="text" class="field text" value="" size="2" maxlength="2" tabindex="3" required />
<label for="Field317-1">MM</label>
</span> 
<span class="symbol">/</span>
<span>
<input id="Field317-2" name="Field317-2" type="text" class="field text" value="" size="2" maxlength="2" tabindex="4" required />
<label for="Field317-2">DD</label>
</span>
<span class="symbol">/</span>
<span>
 <input id="Field317" name="Field317" type="text" class="field text" value="" size="4" maxlength="4" tabindex="5" required />
<label for="Field317">AAAA</label>
</span>
<span id="cal317">
<img id="pick317" class="datepicker" src="images/calendar.png" alt="Pick a date." />
</span>
</li>
<li id="foli318" class="time notranslate      ">
<label class="desc" id="title318" for="Field318">
Hora de Inicio
<span id="req_318" class="req">*</span>
</label>
<span class="hours">
<input id="Field318" name="Field318" type="text" class="field text" value="" size="2" maxlength="2" tabindex="6" required />
<label for="Field318">HH</label>
</span>
<span class="symbol minutes">:</span>
<span class="minutes">
<input id="Field318-1" name="Field318-1" type="text" class="field text" value="" size="2" maxlength="2" tabindex="7" required />
<label for="Field318-1">MM</label>
</span>
<span class="symbol seconds">:</span>
<span class="seconds">
 <input id="Field318-2" name="Field318-2" type="text" class="field text" value="" size="2" maxlength="2" tabindex="8" />
<label for="Field318-2">SS</label>
</span>
<span class="ampm">
<select id="Field318-3" name="Field318-3" class="field select" style="width:4em" tabindex="9" >
<option value="AM" selected="selected">AM</option>
<option value="PM" >PM</option>
</select>
<label for="Field318-3">AM/PM</label>
</span>
</li><li id="foli319" class="notranslate      ">
<fieldset>
<![if !IE | (gte IE 8)]>
<legend id="title319" class="desc">
Tipo
</legend>
<![endif]>
<!--[if lt IE 8]>
<label id="title319" class="desc">
Tipo
</label>
<![endif]-->
<div>
<input id="radioDefault_319" name="Field319" type="hidden" value="" />
<span>
<input id="Field319_0" name="Field319" type="radio" class="field radio" value="Conferencia" tabindex="10" checked="checked" />
<label class="choice" for="Field319_0" >
Conferencia</label>
</span>
<span>
<input id="Field319_1" name="Field319" type="radio" class="field radio" value="Taller" tabindex="11" />
<label class="choice" for="Field319_1" >
Taller</label>
</span>
</div>
</fieldset>
</li><li id="foli320" class="notranslate       ">
<label class="desc" id="title320" for="Field320">
Dirigido a 
<span id="req_320" class="req">*</span>
</label>
<div>
<select id="Field320" name="Field320" class="field select medium" tabindex="12" > 
<option value="Seleccione opcion.." selected="selected">
Seleccione opcion..
</option>
<option value="Arquitectura" >
Arquitectura
</option>
<option value="Ingenieria de Sistemas" >
Ingenieria de Sistemas
</option>
<option value="Ingenieria Industrial" >
Ingenieria Industrial
</option>
<option value="Ingenieria Electronica" >
Ingenieria Electronica
</option>
<option value="Ingenieria Civil" >
Ingenieria Civil
</option>
<option value="Ingenieria en Industrias Alimentarias" >
Ingenieria en Industrias Alimentarias
</option>
</select>
</div>
</li><li id="foli325" class="notranslate section      ">
<section>
<h3 id="title325">
Ambiente de Ponencia
</h3>
<div id="instruct325">Los campos siguientes son opcionales en el caso que aún no se tengan coordinadas las aulas.</div>
</section>
</li><li id="foli323" class="notranslate       ">
<label class="desc" id="title323" for="Field323">
Ambiente
</label>
<div>
<select id="Field323" name="Field323" class="field select medium" tabindex="13" > 
<option value="Seleccione.." selected="selected">
Seleccione..
</option>
<option value="Aula" >
Aula
</option>
<option value="Laboratorio" >
Laboratorio
</option>
<option value="Auditorio" >
Auditorio
</option>
<option value="Coliseo" >
Coliseo
</option>
</select>
</div>
</li>
<li id="foli326" class="notranslate       ">
<label class="desc" id="title326" for="Field326">
Aula
</label>
<div>
<select id="Field326" name="Field326" class="field select medium" tabindex="14" > 
<option value="Seleccione.." selected="selected">
Seleccione..
</option>
<option value="101" >
101
</option>
<option value="102" >
102
</option>
<option value="103" >
103
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
<label for="comment">Do Not Fill This Out</label>
<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
<input type="hidden" id="idstamp" name="idstamp" value="A4DQU3fnirU09pk5LMVa00aRuFejHz/hHMa+RLUZH+A=" />
</li>
	
	
</ul>
</form> 
			
			</div><!--container-->
<!-- end .content --></div>