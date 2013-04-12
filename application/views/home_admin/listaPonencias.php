<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">
<div class="content">
<div id="container" class="ltr">
<ul>
<form name="formMantener" action="<?php echo base_url();?>index.php/administrador/c_mantenerPonencia/mantenerPonencia/" method="post">
<li id="foli284" class="likert notranslatec col5">
    <table><br />
    <h1 style="text-align: left;">Listado de Eventos</h1>
    <thead>
    <tr>
        <td><strong>Codigo</strong></td>
        <td ><strong>Ponencia</strong></td>
        <td ><strong>Asignado a</strong></td>
        <td ><strong>Ambiente</strong></td>
        <td ><strong>Estado</strong></td>
        <td ><strong>Modificar</strong></td>
        <td ><strong>Eliminar</strong></td>
    </tr>
    </thead>
    <tbody>
     
     <!--NO BORRAR PODRIA SERVIR PARA FUTURAS MODIFICACIONES
     <?php foreach ($ponencias as $p){?>
 	 <tr class="statement284">
		 <td><?=$p->id_pon?></td>
		 <td><?=$p->nom_pon?></td>
		 <td><?=$p->cod_exp_pon?></td>
		 <td><?=$p->id_amb_pon?></td>
		 <td><?=$p->est_pon?></td>
		 <td ><a href="<?php base_url()?>/index.php/administrador/c_mantenerPonencia/mantenerPonencia/Modificar/<?=$p->id_pon?>">Modificar</a>
		 <td ><a href="<?php base_url()?>/index.php/administrador/c_mantenerPonencia/mantenerPonencia/Eliminar/<?=$p->id_pon?>">Eliminar</a>
	 </tr>
	 <?php }?>-->

	<?php for($i=0; $i<count($ponencias); $i++){?>
 	 <tr class="statement284">
		 <td><?=$ponencias[$i]->id_pon?></td>
		 <td><?=$ponencias[$i]->nom_pon?></td>
		 <td><?=$ponencias[$i]->cod_exp_pon?></td>
		 <td><?=$ambiente[$i]?></td>
		 <td><?=$estado[$i]?></td>
		 <td ><a href="<?php base_url()?>/index.php/administrador/c_mantenerPonencia/mantenerPonencia/Modificar/<?=$ponencias[$i]->id_pon?>">Modificar</a>
		 <td ><a href="<?php base_url()?>/index.php/administrador/c_mantenerPonencia/mantenerPonencia/Eliminar/<?=$ponencias[$i]->id_pon?>">Eliminar</a>
	 </tr>
	 <?php }?>
	


	    
    </tbody>
    </table>
</li>
<li > 
<input type="submit" value="Agregar" name="accion"/>
<input type="submit" value="Modificar" name="accion"/>
<input type="submit" value="Eliminar" name="accion"/>
</li>
</form>
</ul>
			
			</div><!--container-->
<!-- end .content --></div>