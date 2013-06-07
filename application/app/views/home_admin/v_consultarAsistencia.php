<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

<div class="content">
<div id="container" class="ltr">
<ul>
	<form action="<?php echo base_url();?>administracion/c_administracion/consultarAsistenciaXApePat/" method="post" accept-charset="utf-8"><header id="header" class="info">
	<h2>Consultar Asistencia</h2>
	<div>Complete lo campos, para buscar asistencia por participantes.</div>
	</header>

	<ul>
		<li id="foli5" class="notranslate section">
			<section><h3 id="title5">Datos de Participante</h3></section>
		</li>
		<li id="foli23" class="notranslate">
			<label class="desc" id="apepat"> Apellido Paterno </label>
			<div><input name="apepat" type="text" value="" class="field text medium"/></div>
		</li>
		<li class="buttons ">
			<div><input type="submit" value="Buscar Participante" /></div>
		</li>
	</ul>
	</form>
	
	<div id="foli284" class="likert notranslatec col5">
	<table>
		<br />
		<h1 style="text-align: left;">Resultado de Busqueda</h1>
		<br>
		<thead>
			<tr>
				<td><strong>Codigo</strong></td>
				<td><strong>Apellido Paterno</strong></td>
				<td><strong>Apellido Materno</strong></td>
				<td><strong>Nombre</strong></td>
				<td><strong>Ponencia</strong></td>
				<td><strong>Evento</strong></td>
				<td><strong>Estado</strong></td>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0; $i<count($partic_ponencia); $i++){?>
			<tr class="statement284">
				<td><?=$partic_ponencia[$i]['cod_user']?></td>
				<td><?=$partic_ponencia[$i]['ape_pat_user']?></td>
				<td><?=$partic_ponencia[$i]['ape_mat_user']?></td>
				<td><?=$partic_ponencia[$i]['nom_user']?></td>
				<td><?=$partic_ponencia[$i]['ponencia_id_pon']?></td>
				<td><?=$partic_ponencia[$i]['id_eve']?></td>
				<td><?=$partic_ponencia[$i]['asistio']?></td>
			</tr>
			<?php }?>
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
