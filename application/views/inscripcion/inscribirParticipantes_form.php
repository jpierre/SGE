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