<div id="inscribir" align="center" style="position:absolute; left:50%; top:150px;">
  <h1>Mis Datos</h1>
  <form action="<?php echo base_url();?>index.php/login/create_member" method="post" accept-charset="utf-8">
    <fieldset>
      <legend>Datos del Participante</legend>
      <label>Nombre </label>
      <input type="text" value="<?php echo $this->session->userdata('id'); ?>" />
      </br>
      <label>Apellido Paterno </label>
      <input type="text" value="<?php echo $this->session->userdata('id'); ?>" />
      </br>
      <label>Apellido Materno</label>
      <input type="text" value="<?php echo $this->session->userdata('id'); ?>" />
      </br>
    </fieldset>
    <p>
    <p>&nbsp;</p>
    </p>
    <p>
      <input type="submit" name="submit" value="Actualizar Datos"  />
    </p>
    </fieldset>
  </form>
</div>
<!-- end login_form-->