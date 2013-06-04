<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">
<div class="content">
<div id="container" class="ltr">
<ul>
<form name="formMantener" action="<?php echo base_url();?>index.php/mantener/c_mantenerPonencia/mantenerPonencia/" method="post">
<header id="header" class="info">
<h2>Emitir Certificado</h2>
<div>Complete lo campos, para generar los certificados por evento o especificamente, por participante.</div>
</header>

<ul>
<li id="foli1" class="notranslate first section      ">
<section>
<h3 id="title1">
Datos del Evento
</h3>
</section>
</li><li id="foli20" class="notranslate       ">
<label class="desc" id="title20" for="Field20">
Seleccionar una opción
<span id="req_20" class="req">*</span>
</label>
<div>
	<select class="field select medium"> 
		<option value="Seleccione.." selected="selected">Seleccione..</option>
		<option value="VISION 2013" >VISION 2013</option>
		<option value="SOCOTE 2013" >SOCOTE 2013</option>
		<option value="Lima Android Day" >Lima Android Day</option>
	</select>
</div>
</li><li id="foli5" class="notranslate section      ">
<section>
<h3 id="title5">
Datos de Participante
</h3>
<div id="instruct5">ATENCION: Si no ingresa ningun criterio de busqueda se mostrarán todos los participantes de un evento.</div>
</section>
</li><li id="foli23" class="notranslate      ">
<label class="desc" id="title23" for="Field23">
Apellido Paterno
</label>
<div>
<input id="Field23" name="Field23" type="text" class="field text medium" value="" maxlength="255" tabindex="2" onkeyup="" />
</div>
</li><li id="foli26" class="notranslate      ">
<label class="desc" id="title26" for="Field26">
DNI
</label>
<div>
<input id="Field26" name="Field26" type="text" class="field text small" value="" maxlength="255" tabindex="3" onkeyup="" />
</div>
</li>

 <li class="buttons ">
<div>

                    <input id="saveForm" name="saveForm" class="btTxt submit" 
    type="submit" value="Mostrar Resultados"
 /></div>
</li>
</ul>




<div id="foli284" class="likert notranslatec col5">
   <table><br />
    <h1 style="text-align: left;">Emitir Certificado</h1><br>
    <thead>
    <tr>
        <td><strong>Codigo</strong></td>
        <td ><strong>Apellido Paterno</strong></td>
        <td ><strong>Apellido Materno</strong></td>
        <td ><strong>Nombre</strong></td>
        <td ><strong>Evento Registrado</strong></td>
        <td ><strong>Estado</strong></td>
        <td ><strong>Accion</strong></td>
    </tr>
    </thead>
    <tbody>
    <tr class="statement284">
		 <td>100245</td>
		 <td>Perez</td>
		 <td>Tang</td>
		 <td>Jean Pierre</td>
		 <td>VISION 2013</td>
		 <td>Habilitado</td>
		 <td ><a href="#"><img alt="Generar Certificado" src="<?php echo base_url(); ?>images/certificado.png"></a> <a href="#"><img alt="Ver Asistencia" src="<?php echo base_url(); ?>images/asistencia.png"></a></a></td>
	</tr>
    <!-- href="<?php base_url()?>/administrador/c_mantenerPonencia/mantenerPonencia/Modificar/<?=$ponencias[$i]->id_pon?>" -->
 
<!--<?php for($i=0; $i<count($ponencias); $i++){?>
 	 <tr class="statement284">
		 <td><?=$ponencias[$i]->id_pon?></td>
		 <td><?=$ponencias[$i]->nom_pon?></td>
		 <td><?=$ponencias[$i]->cod_exp_pon?></td>
		 <td><?=$ambiente[$i]?></td>
		 <td><?=$estado[$i]?></td>
		 <td ><a href="<?php base_url()?>/index.php/administrador/c_mantenerPonencia/mantenerPonencia/Modificar/<?=$ponencias[$i]->id_pon?>"><img alt="Modificar" src="<?php echo base_url(); ?>images/edit.png"></a> <a href="<?php base_url()?>/index.php/administrador/c_mantenerPonencia/mantenerPonencia/Eliminar/<?=$ponencias[$i]->id_pon?>"><img alt="Eliminar" src="<?php echo base_url(); ?>images/delete.png"></a></a></td>
	</tr>
	 <?php }?>-->
	 
 
    </tbody>
    </table>
</div>
<div > 
<input type="hidden" value="Agregar" name="accion"/>
<input type="hidden" value="Modificar" name="accion"/>
<input type="hidden" value="Eliminar" name="accion"/>
</div>
</form>
</ul>
			
			</div><!--container-->
<!-- end .content --></div>