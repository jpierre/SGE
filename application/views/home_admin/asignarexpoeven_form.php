<script language="javascript" type="text/javascript">
function comprobar(obj)
{   
    if (obj.checked)
        document.getElementById('asignar').disabled = false;
    else
        document.getElementById('asignar').disabled = true;
}

</script>

<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">
<div class="content">


<div id="container" class="ltr">
<header id="header" class="info">
<h2>Bienvenidos! Eventos FIA ! </h2>
<div>SGE es un proyecto para el curso de DIS enfocado a las necesitades de nuestra facultad.</div>
</header>

<ul>
	<li id="foli112" class="notranslate first section      ">
	<section>
	
					<div align="center">
					
					  <h1>Asignar Expositor a ponencia</h1>
										
					<fieldset><legend>Datos del expositor</legend>
					<h4 style="color:#FF0000"><?php echo $this->session->userdata('mensaje'); ?></h4>
					<form action="<?php echo base_url();?>administracion/c_administracion/obteneterDatosExpositor/" method="post" accept-charset="utf-8">
					<table >
					  <tr>
					    <td>Codigo: </td>
					    <td><input type="text" name="codigo" value="<?php echo $this->session->userdata('codi');?>"/></td>
					    <td><input type="submit" value="Busca Expositor"/></td>
					  </tr>
					  <tr>
					    <td>Expositor: </td>
					    <td><label><?php echo $this->session->userdata('nom').", ".$this->session->userdata('ape_Pat')." ".$this->session->userdata('ape_Mat');?></label></td>
					    <td></td>
						
					  </tr>
					  <tr>
					    <td>Pais: </td>
					    <td><label><?php echo $this->session->userdata('pais');?></label></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>Especialidad: </td>
					    <td><label><?php echo $this->session->userdata('especialidad');?></label></td>
					    <td></td>
					  </tr>
					</table>
					</form>
					</fieldset>
					
					
					<fieldset>
					<legend>Datos de Ponencia</legend>
					<h4 style="color:#FF0000"><?php echo  $this->session->userdata('mensaje2'); ?></h4>
					<form action="<?php echo base_url();?>administracion/c_administracion/obtenerDatosPonencia/" method="post" accept-charset="utf-8">
					<table width="200" border="0">
					  <tr>
					    <td>Codigo: </td>
					    <td><input type="text" name="codigo2" value="<?php echo $this->session->userdata('codi2');?>"/></td>
					    <td><input type="submit" value="Buscar Ponencia"/></td>
					  </tr>
					  <tr>
					    <td>Titulo: </td>
					    <td><label><?php echo $this->session->userdata('titulo');?></label></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>Aula: </td>
					    <td><label><?php echo$this->session->userdata('aula');?></label></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>Ambiente: </td>
					    <td><label><?php echo $this->session->userdata('ambiente');?></label></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>Tipo de Ponencia: </td>
					    <td><label><?php echo $this->session->userdata('tipo1');?></label></td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>Duracion: </td>
					    <td><label><?php echo $this->session->userdata('duracion');?></label></td>
					    <td></td>
					  </tr>
					</table>
					
					</fieldset>
					</form>
					
					<form action="<?php echo base_url();?>administracion/c_administracion/asignarExpPon/" method="post" accept-charset="utf-8">				<input type="hidden" name="evento" value="<?php echo $id_evento; ?>"/>
						
						<input type="hidden" name="cod" value="<?php echo $this->session->userdata('codi');?>"/>
							
						<input type="hidden" name="cod2" value="<?php echo $this->session->userdata('codi2');?>"/>
						
					<fieldset>
					<legend>Requerimientos de Ponencias</legend>
					
					<table width="274" border="0">
					  <tr>
					    <td><input name="req1" value="1" type="checkbox" <?php if($this->session->userdata('mensaje')!="No se encontraron Resultados" && $this->session->userdata('mensaje') != NULL){?> onChange="comprobar(this);" <?php } ?>/>
					    Pizarra Acrilica</td>
					    <td><input name="req2" value="1" type="checkbox" <?php if($this->session->userdata('mensaje')!="No se encontraron Resultados" && $this->session->userdata('mensaje') != NULL){?> onChange="comprobar(this);" <?php } ?>/>
					    Personal de Apoyo</td>
					    <td><input name="req3" value="1" type="checkbox" <?php if($this->session->userdata('mensaje')!="No se encontraron Resultados" && $this->session->userdata('mensaje') != NULL){?> onChange="comprobar(this);"  <?php } ?>/>
					      Parlantes</td>
					  </tr>
					  <tr>
					    <td><input name="req4" value="1" type="checkbox" <?php if($this->session->userdata('mensaje')!="No se encontraron Resultados" && $this->session->userdata('mensaje') != NULL){?> onChange="comprobar(this);"  <?php } ?>/>
					      Laptops</td>
					    <td><input name="req5" value="1" type="checkbox" <?php if($this->session->userdata('mensaje')!="No se encontraron Resultados" && $this->session->userdata('mensaje') != NULL){?> onChange="comprobar(this);"  <?php } ?>/>
					      Microfono Inalambrico</td>
					    <td>&nbsp;</td>
					  </tr>
					  <tr>
					    <td colspan="3">
					    Requerimientos de SW
					    <textarea name="reqAdic" onkeyup = "asignar.disabled = this.value==''"></textarea>
					    </td>
						<td>
						
						</td>
						</tr>
					</table>
					
					
					<input id="asignar" type="submit" value="Asignar" name="asignar"  disabled/>
					</fieldset>
					</form>

</div><!-- end login_form-->
	
	</section>
	</li>
	</ul>

			</div><!--container-->
<!-- end .content --></div>