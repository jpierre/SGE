

<!-- ARRIBA VA INCLUDES/HEADER.PHP -->

<div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Noticias</h3>
            <h4>Vision 2013</h4>
            <h5>Octubre 2013</h5>
            <p>.....&nbsp;<a href="#">leer mas</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Eventos</h3>
            <ul>
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Buscar</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->

<div id="signup_form">
  <h1>Registrate</h1>
  <p>(*)Campos obligatorios</p>
  <form action="<?php echo base_url();?>index.php/login/create_member" method="post" accept-charset="utf-8">

<fieldset><legend>--------- Informacion Personal --------</legend><br><br>

 	<label>DNI*</label> <input name="dni" type="text" value="<?php echo set_value('dni'); ?>"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('dni'); ?></a>
	
	<label>Nombres*</label> <input type="text" name="nombres" value="<?php echo set_value('nombres'); ?>" class="input1"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('nombres'); ?></a>
	
	<label>Apellido Paterno*</label> <input type="text" name="ape_pat" value="<?php echo set_value('ape_pat'); ?>" class="input1"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('ape_pat'); ?></a>
	
	<label>Apellido Materno*</label> <input type="text" name="ape_mat" value="<?php echo set_value('ape_mat'); ?>" class="input1"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('ape_mat'); ?></a>
	
	<label>Telefono Fijo*</label> <input type="text" name="fijo" value="<?php echo set_value('fijo'); ?>" class="input1"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('fijo'); ?></a>
	
	<label>Celular*</label> <input type="text" name="celular" value="<?php echo set_value('celular'); ?>" class="input1"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('celular'); ?></a>
	
	<label>Correo*</label> <input type="text" name="email_adress" value="<?php echo set_value('email_adress'); ?>" class="input1"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('email_adress'); ?></a>
	
	<label>Direccion*</label> <input type="text" name="direccion" value="<?php echo set_value('direccion'); ?>" class="input1"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('direccion'); ?></a>

	<label>Usuario*</label> <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="input1"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('username'); ?></a>
	
	<label>Password*</label> <input type="password" name="password" class="input1"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('password'); ?></a>
	
	<label>Confirmar Password*</label> <input type="password" name="password2" class="input1"></input><br><br>
	<a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('password2'); ?></a>




</fieldset>

<fieldset><legend>---- Información sobre su empresa ----</legend><br><br>
  <p>
    <label>Empresa</label>
    <input type="text" name="empresa" value="<?php echo set_value('empresa'); ?>"/><br><br>
    <label>RUC</label>
    <input type="text" name="ruc" value="<?php echo set_value('ruc'); ?>"/><br><br>
    <label>Razon Social</label>
    <input type="text" name="razon_social" value="<?php echo set_value('razon_social'); ?>"/><br><br>
    <label>Cargo</label>
    <input type="text" name="cargo" value="<?php echo set_value('cargo'); ?>"/><br><br>
    <label>Sector Industrial</label>
    <input type="text" name="sector_ind" value="<?php echo set_value('sector_ind'); ?>"/>
  </p>
  <br>
  <p>
    <label>Como se entero del evento?</label>
	<select>
	  <option >Facebook</option>
	  <option >Pagina USMP</option>
	  <option >Medios de Prensa</option>
	</select>
   </p> 
  <p>
    <img src="<?php echo base_url();?>index.php/login/captcha" alt="captcha" /><br>
    <label>Ingrese caracteres </label><input type="text" name="captcha" class="input1"/>
    <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('captcha'); ?></a>
    <br>
    <!-- <h3 style="font-size: 8pt; color:red"><?php echo validation_errors(); ?></h3> -->
    <input type="submit" name="submit" value="Registrarse"  />
  </p>

</fieldset>
  </form>

</div><!-- end login_form-->



<!-- ABAJO VA INCLUDES/FOOTER.PHP -->