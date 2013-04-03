<<<<<<< HEAD
<div id="inscribir" align="center" style="">
  <h1>Mis Datos</h1>
  <form action="<?php echo base_url();?>index.php/login/create_member" method="post" accept-charset="utf-8">
  <h3 style="color:#F00">Atencion: Solo pedes inscribir un maximo de 10 personas</h3>
  <?php for($i=1; $i<11; $i++): ?>
    <fieldset>
      <legend>Datos del Participante <?php echo $i;?></legend>
      <label>Nombre </label>
      <input type="text" value="" />
      </br>
      <label>Apellido Paterno </label>
      <input type="text" value="" />
      </br>
      <label>Apellido Materno</label>
      <input type="text" value="" />
      </br>
    </fieldset>
    <p>
    <p>&nbsp;</p>
    </p>

    </fieldset>
  <?php endfor ?>
  <p>
      <input type="submit" name="submit" value="inscribir"  />
    </p>
  </form>
</div>
<!-- end login_form-->
=======
</div><!-- end login_form-->

<div class="content">
     <link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">

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
		  <h1>Mis Datos</h1>
		  <form action="<?php echo base_url();?>index.php/login/create_member" method="post" accept-charset="utf-8">
		  <h3 style="color:#F00">Atencion: Solo puedes inscribir un maximo de 10 personas</h3>
		  <?php for($i=1; $i<3; $i++): ?>
		    <fieldset>
		      <legend>Datos del Participante <?php echo $i;?></legend>
		      <label>Nombre </label>
		      <input type="text" value="" />
		      </br>
		      <label>Apellido Paterno </label>
		      <input type="text" value="" />
		      </br>
		      <label>Apellido Materno</label>
		      <input type="text" value="" />
		      </br>
		    </fieldset>
		    <p>
		    <p>&nbsp;</p>
		    </p>
		
		    </fieldset>
		  <?php endfor ?>
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
>>>>>>> origin/Cambio-de-Diseño
