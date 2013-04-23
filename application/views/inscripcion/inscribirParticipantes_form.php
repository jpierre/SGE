<!-- ESTE PHP VA DENTRO DE HOME/HOME ES EL MAIN_CONTENT  -->

<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

<div class="content">
<div id="container" class="ltr">

<form id="form6" name="form6" action="<?php echo base_url();?>index.php/inscripcion/c_inscripcion/inscrip_n_part_externos/" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<form  method="post" >
<header id="header" class="info">
<h2>Bienvenidos! Eventos FIA ! </h2>
<div>SGE es un proyecto para el curso de DIS enfocado a las necesitades de nuestra facultad.</div>
</header>

<ul>
<li id="foli112" class="notranslate first section      ">
<section>
<div align="center">
		  <h1>Mis Datos</h1>
		 
		  <h3 style="color:#F00">Atencion: Solo puedes inscribir un maximo de 2 personas</h3>
		  <?php for($i=1; $i<3; $i++): ?>
		    <fieldset>
		      <legend>Datos del Participante <?php echo $i;?></legend>
              <label>Tipo de documento</label>
       		 	<select name="<?php echo 'tipo_doc'.$i;?>">
         		 <option value="1">DNI</option>
         		 <option value="2">VISA</option>
          		 <option value="3">Pasaporte</option>
       		 	</select>
             <br>
        	 <label>Numero de documento*</label>
       		 <input name="<?php echo 'num_doc'.$i;?>" type="text" value="<?php echo set_value('dni'); ?>"/>
             <br>
		      <label>Nombre </label>
		      <input name="<?php echo 'nom'.$i;?>" type="text" value="<?php echo set_value('nom'); ?>" />
		      </br>
		      <label>Apellido Paterno </label>
		      <input name="<?php echo 'apePat'.$i;?>" type="text" value="" />
		      </br>
		      <label>Apellido Materno</label>
		      <input name="<?php echo 'apeMat'.$i;?>" type="text" value="" />
		      </br>
              <input name="id_evento" type="hidden" value="<?php echo $id_evento; ?>" />
              
		    </fieldset>
		    <p>
		    <p>&nbsp;</p>
		    </p>
		
		    </fieldset>
		  <?php endfor ?>
          <p><input name="tipo_pago" value="1" type="radio" checked />
              Contado</p><br />
		  <p>
		      <input type="submit" name="submit" value="inscribir"  />
		    </p>
		  </form>
		</div>
<!-- end login_form-->

</section>
</li>

</ul>


</div><!--container-->
    <!-- end .content --></div>