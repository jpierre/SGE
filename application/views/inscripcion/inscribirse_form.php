<!-- ESTE PHP VA DENTRO DE HOME/HOME ES EL MAIN_CONTENT  -->



<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">
<div class="content">
<div id="container" class="ltr">

<form id="form6" name="form6" action="<?php echo base_url();?>index.php/inscripcion/inscribir/registar_inscrip/" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<form  method="post" >
<header id="header" class="info">
<h2>Bienvenidos! Eventos FIA ! </h2>
<div>SGE es un proyecto para el curso de DIS enfocado a las necesitades de nuestra facultad.</div>
</header>

<ul>
<li id="foli112" class="notranslate first section      ">
<section>

	<div align="center">

		  <h1>Inscripcion</h1>
		  <p>(*)Campos obligatorios</p>
		  
			<fieldset><legend>Datos del Participante</legend>
		  		<p><b>Codigo:</b> <?php echo $this->session->userdata('idDNI'); ?> &nbsp; &nbsp; &nbsp;
		    	<b>Participante:</b> <?php echo $this->session->userdata('apePat')." ".$this->session->userdata('apeMat').", ".$this->session->userdata('nombres'); ?></p>
		  		<p><b>Estado:</b> <?php echo $this->session->userdata('estado');?>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  
		  		<b>Escuela:</b> <?php echo $this->session->userdata('escuela');?></p>	
		 	</fieldset>
			<fieldset><legend>Modalidad de Pago</legend>
		  <p><label><input name="tipo_pago" value="1" type="radio" checked onclick="extranjero(this)"/>Contado</label></p><br />
			
		  <?php if(strcasecmp($this->session->userdata('estado'), '1')==0): ?>
		    <p><label><input name="tipo_pago" value="2" type="radio" onclick="extranjero(this)"/>Cuotas</label> &nbsp; &nbsp;
			
            <select name="cant_cuotas" id="cant_cuotas">
		  		<option selected="selected" value"0" >Seleccione</option>
		  		<option value="2">2</option>
		  		<option value="3" >3</option>
		    </select>
			</p>
		<?php endif ?>
			
		    
			<input name="id_evento" type="hidden" value="<?php echo $id_evento; ?>"/>
		    <label>Monto</label>
		    <input name="monto" type="text" value="250" readonly="readonly" />
		 
		    
		    </p>
		  <p>
		  <input type="submit" name="submit" value="Registrarse"  />
		  </p>
		
		</fieldset>
		  </form>
		
		</div><!-- end login_form-->
		
		</section>
		</li>
		 
		<li class="hide">
		<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
		<input type="hidden" id="idstamp" name="idstamp" value="UMNzPMBJAKJDRS+yIF9KnTpg/3fM+9os4GLiBNShDgc=" />
		</li>
		</ul>

	
</div><!--container-->
    <!-- end .content --></div>