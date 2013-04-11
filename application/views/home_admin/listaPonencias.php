<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">
<div class="content">
<div id="container" class="ltr">
<ul>
<form name="formMantener" action="<?php echo base_url();?>index.php/administrador/c_mantenerPonencia/mantenerPonencia/" method="post">
<li id="foli284" class="likert notranslatec col5">
    <table><br />
    <h1 style="text-align: left;">Listado de Eventos</h1>
    <thead>
    <tr>
        <td><strong>Codigo</strong></td>
        <td ><strong>Ponencia</strong></td>
        <td ><strong>Asignado a</strong></td>
        <td ><strong>Ambiente</strong></td>
        <td ><strong>Estado</strong></td>
        <td ><strong>Seleccion</strong></td>
    </tr>
    </thead>
    <tbody>
    <tr class="statement284">
        <td ><?php echo $this->session->userdata('codPonencia'); ?></td>
        <td ><?php echo $this->session->userdata('nomPonencia'); ?></td>
        <td ><?php echo $this->session->userdata('expositor'); ?></td>
        <td ><?php echo $this->session->userdata('ambiente'); ?></td>
        <td ><?php echo $this->session->userdata('estado'); ?></td>
        <td ><input type="checkbox"/></td>
    </tr>
    <tr class="alt statement285">
        <td >115</td>
        <td >Presentacion Google Cloude</td>
        <td >Victor Sifuentes</td>
        <td >Auditorio Fia Data</td>
        <td >Sin Contratiempos</td>
        <td ><span>Modificar</span></td>
        
        
    </tr>
    <tr class="statement288">
        <td >164</td>
        <td >Tecnologias Moviles</td>
        <td >Carolina Zapata</td>
        <td >Aula 204</td>
        <td >Sin Contratiempos</td>
        <td ><input type="checkbox"/></td>
    </tr>
    </tbody>
    </table>
</li>
<li > 
<input type="submit" value="Agregar" name="accion">agregame</input>
<input type="submit" value="Modificar" name="accion"/>
<input type="submit" value="Eliminar" name="accion"/>
</li>
</form>
</ul>
			
			</div><!--container-->
<!-- end .content --></div>