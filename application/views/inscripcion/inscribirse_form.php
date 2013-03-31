<div id="inscribir" align="center" style="position:absolute; left:50%; top:150px;">

  <h1>Inscripcion</h1>
  <p>(*)Campos obligatorios</p>
  <form action="<?php echo base_url();?>index.php/inscripcion/inscribir/registar_inscrip/" method="post" accept-charset="utf-8">

<fieldset><legend>Datos del Participante</legend>
  <p><b>Codigo:</b> <?php echo $this->session->userdata('idDNI'); ?> &nbsp; &nbsp; &nbsp;
    <b>Participante:</b> <?php echo $this->session->userdata('apePat')." ".$this->session->userdata('apeMat').", ".$this->session->userdata('nombres'); ?></label></p>
  <p><b>Estado:</b> <?php echo $this->session->userdata('estado');?>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  
  	<b>Escuela:</b> <?php echo $this->session->userdata('escuela');?></p>	
  
  




</fieldset>





<fieldset><legend>Modalidad de Pago</legend>


  <p>
  	<p><label><input name="tipo_pago" value="contado" type="radio"/>Contado</label></p><br />
	
  <?php if(strcasecmp($this->session->userdata('estado'), "estudiante")==0): ?>
    <p><label><input name="tipo_pago" value="cuotas" type="radio"/>Cuotas</label> &nbsp; &nbsp;
	<select name="cant_cuotas">
  		<option value"contado" >Seleccione</option>
  		<option value="una cuota" >1</option>
  		<option value="dos cuotas">2</option>
  		<option value="tres cuotas" >3</option>
    </select>
	</p>
<?php endif ?>
	
    
	<input name="id_evento" type="hidden" value="<?php echo $id_evento; ?>"/>
    <label>Monto</label>
    <input name="monto" type="text" value="250" />
 
    
    </p>
  <p>
  <input type="submit" name="submit" value="Registrarse"  />
  </p>





</fieldset>
  </form>

</div><!-- end login_form-->