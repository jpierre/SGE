<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

<div class="content">
<div id="container" class="ltr">
<ul>
	<form action="<?php echo base_url();?>administracion/c_administracion/emitirCertificadoXEvento/" method="post" accept-charset="utf-8"><header id="header" class="info">
	<h2>Emitir Certificado</h2>
	<div>Complete lo campos, para generar los certificados por evento o
	especificamente, por participante.</div>
	</header>

	<ul>
		<li id="foli1" class="notranslate first section">
			<section><h3 id="title1">Datos del Evento</h3></section>
		</li>
		<li id="foli20" class="notranslate">
			<label class="desc" id="title20" for="Field20"> Seleccionar una opcion <span id="req_20" class="req">*</span></label>
			<div>
				<select name="id_eve" class="field select medium">
					<?php for($i=0; $i<count($eventos); $i++){?>
						<option value="<?=$eventos[$i]->id_eve?>"><?=$eventos[$i]->nom_eve?></option>
					<?php }?>
				</select>
			</div>
		</li>
		<li id="foli5" class="notranslate section">
			<section><h3 id="title5">Datos de Participante</h3>
				<div id="instruct5">ATENCION: Si no ingresa ningun criterio de busqueda se mostraran todos los participantes de un evento.</div>
			</section>
		</li>
		<li id="foli23" class="notranslate">
			<label class="desc" id="apepat"> Apellido Paterno </label>
			<div><input name="apepat" type="text" value="" class="field text medium"/></div>
		</li>
		<li class="buttons ">
			<div><input type="submit" value="Mostrar Resultados" /></div>
		</li>
	</ul>
	</form>
	
	<div id="foli284" class="likert notranslatec col5">
	<table>
		<br />
		<h1 style="text-align: left;">Emitir Certificado</h1>
		<br>
		<thead>
			<tr>
				<td><strong>DNI</strong></td>
				<td><strong>Apellido Paterno</strong></td>
				<td><strong>Apellido Materno</strong></td>
				<td><strong>Nombre</strong></td>
				<td><strong>Evento Registrado</strong></td>
				<td><strong>Estado</strong></td>
				<td><strong>Accion</strong></td>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0; $i<count($participantes); $i++){
				if($participantes[$i]->num_doc_user!=null){											?>
			<tr class="statement284">
				<td><?=$participantes[$i]->num_doc_user?></td>
				<td><?=$participantes[$i]->ape_pat_user?></td>
				<td><?=$participantes[$i]->ape_mat_user?></td>
				<td><?=$participantes[$i]->nom_user?></td>
				<td><?=$evento->nom_eve?></td>
				<td>HABILITADO</td>
				<td><a href="<?php base_url()?>/administrador/c_mantenerPonencia/mantenerPonencia/Modificar/<?=$participantes[$i]->num_doc_user?>"><img alt="Generar Certificado"
					src="<?php echo base_url(); ?>images/certificado.png"></a> <a
					href="#"><img alt="Ver Asistencia"
					src="<?php echo base_url(); ?>images/asistencia.png"></a></a></td>
			</tr>
			<?php }}?>
			<!-- href="<?php base_url()?>/administrador/c_mantenerPonencia/mantenerPonencia/Modificar/<?=$ponencias[$i]->id_pon?>" -->

		</tbody>
	</table>
	</div>
	
	
	
	<div>
	<input type="hidden" value="Agregar" name="accion" /> 
	<input type="hidden" value="Modificar" name="accion" />
	<input type="hidden" value="Eliminar" name="accion" />
	</div>
	
</ul>

</div>
<!--container--> <!-- end .content --></div>
