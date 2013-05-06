<div id="inscribir" align="center" style="position: absolute; left: 50%; top: 150px; width: 394px;">

  <h1>Agregar Ponencia</h1>

  <form action="<?php echo base_url();?>inscripcion/c_inscripcion/registar_inscrip/" method="post" accept-charset="utf-8">
<fieldset><legend>Datos de Ponencia</legend>
<table width="328" border="0">
  <tr>
    <td width="97">Codigo</td>
    <td width="63"><input type="text"/></td>
    <td width="18">&nbsp;</td>
  </tr>
  <tr>
    <td>Tipo</td>
    <td><select>
    <option>Conferencia</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Titulo</td>
    <td><input type="text"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Fecha de Inicio</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Fecha de Fin</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Fecha</td>
    <td><input type="text"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Hora de Inicia</td>
    <td><input type="text"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Hora de Fin</td>
    <td><input type="text"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Descripcion</td>
    <td><textarea name="textarea"></textarea></td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
<fieldset>
<legend>Ambiente de Ponencia</legend>

<table width="200" border="0">
  <tr>
    <td>Ambiente</td>
    <td><select>
    
     <option>--Elegir Ambiente--</option>
    <option>Pabellon General</option>
     <option>Pabellon Especialidades</option>
      <option>Auditorio</option>
       
        <option>Coliseo</option>
    
    
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Aula</td>
    <td><input type="text"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Capacidad</td>
    <td><input type="text"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="29">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</fieldset>


<input type="button" value="Regresar"/><input type="button" value="Regresar"/>
  </form>

</div><!-- end login_form-->