<!-- ARRIBA VA INCLUDES/HEADER.PHP -->
<script type="text/javascript">

function validar(){


var posicion=document.getElementById('tipodoc').options.selectedIndex; //posicion
//var letra=document.getElementById('numerodoc').value;

//alert(letra.length);
//alert(document.getElementById('tipodoc').options[posicion].text); //valor



if(document.getElementById('tipodoc').options[posicion].text=="DNI"){


      if(document.getElementById('numerodoc').value.length==8){

          return true;

      }else{

        alert("Ingrese correctamente el numero de DNI, contiene 8 digitos");
		
       document.getElementById('numerodoc').value="";
	   document.getElementById('numerodoc').focus();
      }

return false;

  }


  if(document.getElementById('tipodoc').options[posicion].text=="VISA"){


      if(document.getElementById('numerodoc').value.length==14){

          return true;

      }else{

        alert("Ingrese correctamente el numero de VISA, contiene 11 digitos");

       document.getElementById('numerodoc').value="";
	   document.getElementById('numerodoc').focus();
      }



  }



  if(document.getElementById('tipodoc').options[posicion].text=="Carnet de extranjeria"){


      if(document.getElementById('numerodoc').value.length==8){

          return true;

      }else{

        alert("Ingrese correctamente el Carnet de extranjeria, contiene 11 digitos");

        document.getElementById('numerodoc').value="";
	   document.getElementById('numerodoc').focus();
      }



  }

}




</script>

<div id="content_header"></div>
<div id="site_content">
<div id="content">
<!-- insert the page content here -->

<div id="stylized" >
  <h1>Registrate</h1>
  <p>(*)Campos obligatorios</p>
  <form action="<?php echo base_url();?>index.php/login/create_member" method="post" accept-charset="utf-8" class="box" >
    <div id="personal">
      <fieldset>
        <legend> Informacion Personal</legend>
        <br>
        <br>
        <label>Tipo de documento</label>
        <select name="tipo_doc" id="tipodoc">
          <option value="1">DNI</option>
          <option value="2">VISA</option>
          <option value="3">Carnet de extranjeria</option>
        </select>
        <br>
        <br>
        <label>Numero de documento*</label>
        <input  name="dni" id="numerodoc" onblur="return validar();" type="text"  required="required" value="<?php echo set_value('dni'); ?>"/>
        <br>
        <br>
        <span style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('dni'); ?></span>
        <label>Nombres*</label>
        <input type="text" name="nombres"  required="required"  value="<?php echo set_value('nombres'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('nombres'); ?></a>
        <label>Apellido Paterno*</label>
        <input type="text" name="ape_pat" required="required" value="<?php echo set_value('ape_pat'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('ape_pat'); ?></a>
        <label>Apellido Materno*</label>
        <input type="text" name="ape_mat" required="required" value="<?php echo set_value('ape_mat'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('ape_mat'); ?></a>
        <label>Telefono Fijo</label>
        <input type="text" name="fijo" value="<?php echo set_value('fijo'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('fijo'); ?></a>
        <label>Celular*</label>
        <input type="text" name="celular" required="required" value="<?php echo set_value('celular'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('celular'); ?></a>
        <label>Correo*</label>
        <input type="text" name="email_adress" required="required" value="<?php echo set_value('email_adress'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('email_adress'); ?></a>
        <label>Direccion</label>
        <input type="text" name="direccion" required="required" value="<?php echo set_value('direccion'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('direccion'); ?></a>
        <label>Usuario*</label>
        <input type="text" name="username" required="required" value="<?php echo set_value('username'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('username'); ?></a>
        <label>Password*</label>
        <input type="password" required="required" name="password"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('password'); ?></a>
        <label>Confirmar Password*</label>
        <input type="password" required="required" name="password2">
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('password2'); ?></a>
        </p>
      </fieldset>
    </div>
    <div id="empresa">
      <fieldset>
        <legend>Informacion sobre su empresa</legend>
        <br>
        <label>Empresa</label>
        <input type="text" name="empresa" value="<?php echo set_value('empresa'); ?>"/>
        <br>
        <br>
        <label>RUC</label>
        <input type="text" name="ruc" value="<?php echo set_value('ruc'); ?>"/>
        <br>
        <br>
        <label>Cargo</label>
        <input type="text" name="cargo" value="<?php echo set_value('cargo'); ?>"/>
        <br>
        <br>
        <label>Departamento</label>
        <select name="dpto">
          <option value="1" >Administracion</option>
          <option value="2" >Area Tecnica</option>
          <option value="3" >Asesoria</option>
          <option value="4" >Comercio Electronico</option>
          <option value="5" >Compras</option>
          <option value="6" >Controlling</option>
          <option value="7" >Derecho</option>
          <option value="8" >Finanzas y Contabilidad</option>
          <option value="9" >Capacitacion</option>
          <option value="10" >Gerencia</option>
          <option value="11" >Gestion de Riesgos</option>
          <option value="12" >Ingenieria</option>
          <option value="13" >Diseño</option>
        </select>
        <br>
        <br>
        <label>Sector</label>
        <select name="sector_ind">
          <option value="1" >Banca y Seguros</option>
          <option value="2" >Construccion e Inmobiliaria</option>
          <option value="3" >Energia</option>
          <option value="4" >Industria</option>
          <option value="5" >Mineria</option>
          <option value="6" >Tecnologia de Informacion</option>
          <option value="7" >Telecomunicaciones</option>
        </select>
        <br>
        <br>
        <!-- Todavia no se define nada acerca de "tipo_usuario" solo esta en la vista-->
        <label>Representante de su empresa?</label>
        <br />
        <input type="checkbox" name="tipo_usuario" value="4">
        <br>
        <br>
        <label>Como se entero del evento?</label>
        <select name="como">
          <option value="1" >Facebook</option>
          <option value="2" >Pagina USMP</option>
          <option value="3" >Medios de Prensa</option>
        </select>
        <br>
        <br>
        <img style="margin-left:150px;" src="<?php echo base_url();?>index.php/login/captcha" alt="captcha" /><br>
        <br />
        <label>Ingrese caracteres </label>
        <input type="text" name="captcha" class="input1"/>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('captcha'); ?></a> <br>
        <!-- <h3 style="font-size: 8pt; color:red"><?php echo validation_errors(); ?></h3> --> 
        <br>
        <br>
        <input  class="button orange" type="submit" name="submit" value="Registrarse" >
        </input>
      </fieldset>
    </div>
  </form>
</div>
<!-- end login_form--> 

<!-- ABAJO VA INCLUDES/FOOTER.PHP -->