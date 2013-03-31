<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<div id="inscribir" align="center" style="position: absolute; left: 50%; top: 150px; width: 394px;">

  <h1>Asignar Expositor a ponencia</h1>


<fieldset><legend>Datos del expositor</legend>
<h4 style="color:#FF0000"><?php echo $this->session->userdata('mensaje'); ?></h4>
<form action="<?php echo base_url();?>index.php/administrador/administrador/obteneterDatosExpositor/" method="post" accept-charset="utf-8">
<table width="200" border="0">
  <tr>
    <td width="97">Codigo: </td>
    <td width="63"><input type="text" name="codigo" value="<?php echo $this->session->userdata('codi');?>"/></td>
    <td width="18"><input type="submit" value="Busca Expositor"/></td>
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
<form action="<?php echo base_url();?>index.php/administrador/administrador/obtenerDatosPonencia/" method="post" accept-charset="utf-8">
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

<form action="<?php echo base_url();?>index.php/administrador/administrador/asignarExpPon/" method="post" accept-charset="utf-8">
	
	<input type="hidden" name="cod" value="<?php echo $this->session->userdata('codi');?>"/>
		
	<input type="hidden" name="cod2" value="<?php echo $this->session->userdata('codi2');?>"/>
	
<fieldset>
<legend>Requerimientos de Ponencias</legend>

<table width="274" border="0">
  <tr>
    <td><input name="req1" value="Pizarra Acrilica" type="checkbox"/>
    Pizarra Acrilica</td>
    <td><input name="req2" value="Personal de Apoyo" type="checkbox"/>
    Personal de Apoyo</td>
    <td><input name="req3" value="Parlantes" type="checkbox"/>
      Parlantes</td>
  </tr>
  <tr>
    <td><input name="req4" value="Laptops" type="checkbox"/>
      Laptops</td>
    <td><input name="req5" value="Microfono Inalambrico" type="checkbox"/>
      Microfono Inalambrico</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">
    Requerimientos de SW
    <textarea name="reqAdic"></textarea>
    </td>
	<td>
	
	</td>
	</tr>
</table>
<div style="top:150px;">Evento: <select name="evento">
		<option value="1">Vision 2013</option>
		<option value="2">Cloud Google</option>
	</select></div><br />
<input type="submit" value="Asignar" />
</fieldset>
</form>

</div><!-- end login_form-->