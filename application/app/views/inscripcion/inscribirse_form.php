<!-- ESTE PHP VA DENTRO DE HOME/HOME ES EL MAIN_CONTENT  -->
<link href="<?php echo base_url(); ?>css/wufo/structure.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/form.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/wufo/theme.css" rel="stylesheet">
<script>

function validar(){

if(document.form6.tipo_pago[0].checked){
document.form6.submit();
}
else{

var selec=document.form6.cant_cuotas.selectedIndex;
if (document.form6.cant_cuotas.options[selec].value==0){ 

alert ("Selecciona cuota"); 
return false;
} 

}

}


function validarTotal(){
if(document.form6.tipo_pago[0].checked){

//alert("lo toque");
document.form6.submit();


}else{

var selec=document.form6.cant_cuotas.selectedIndex;
 
if(document.form6.cant_cuotas.options[selec].value=="Seleccione"){
  alert("Selecciona cuota");
  return false;


}



}
	
}
</script>
<div class="content">
  <div id="container" class="ltr">
    <form id="form6" name="form6" action="<?php echo base_url();?>inscripcion/c_inscripcion/registar_inscrip/" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <form  method="post" >
      <header id="header" class="info">
        <h2>Bienvenidos! Eventos FIA ! </h2>
        <div>SGE es un proyecto para el curso de DIS enfocado a las necesitades de nuestra facultad.</div>
      </header>
      <ul>
      <li id="foli112" class="notranslate first section      ">
        <section>
        <div align="center">
        <h1>Inscripcion a
          <?php if ($id_evento=='1'){ echo "Vision 2013";}else{echo "Cloud Google";} ?>
        </h1>
        <br/>
        <fieldset>
          <legend>Datos del Participante</legend>
          <br />
          <p>
            <?php if($this->session->userdata('estado')=='1' || $this->session->userdata('estado')=='2'){echo '<b>Codigo: </b>'.$this->session->userdata('codigo');}else{ echo '<b>Numero Doc: </b>'.$this->session->userdata('idDNI');}
		  
		  
		   ?>
            &nbsp; &nbsp; &nbsp; <b>Participante:</b> <?php echo $this->session->userdata('apePat')." ".$this->session->userdata('apeMat').", ".$this->session->userdata('nombres'); ?></p>
          <p>&nbsp;</p>
          <p><b>Estado:</b>
            <?php if($this->session->userdata('estado')=='1'){
		  							echo "Estudiante";
								  }else if($this->session->userdata('estado')=='2'){
								  	echo "Egresado";
								  }else{echo "Externo";}?>
            &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
            <?php if($this->session->userdata('estado')=='1' || $this->session->userdata('estado')=='2'){
		   		 echo '<b>Escuela:</b>'.$this->session->userdata('escuela');}?>
          </p>
        </fieldset>
        <br />
        <fieldset>
          <legend>Modalidad de Pago</legend>
          <p>&nbsp;</p>
          <p>
            <label>
              <input name="tipo_pago" value="1" type="radio" checked onclick="extranjero(this)"/>
              Contado</label>
          </p>
          <br />
          <?php if(strcasecmp($this->session->userdata('estado'), '1')==0): ?>
          <p>
            <label>
              <input name="tipo_pago" value="2" type="radio" onclick="extranjero(this)"/>
              Cuotas</label>
            &nbsp; &nbsp;
            Nro de cuotas :
            <select name="cant_cuotas" id="cant_cuotas">
              <option selected="selected" value"" >Seleccione</option>
              <option value="2">2</option>
              <option value="3" >3</option>
            </select>
          </p>
          <p>
            <?php endif ?>
            <input name="id_evento" type="hidden" value="<?php echo $id_evento; ?>"/>
            <label>Monto</label>
            <input name="monto" type="text" value="250" readonly="readonly" />
            </p>
          </p>
          <p>&nbsp; </p>
          <p>
            <input class="css3button" type="submit" name="submit" value="Inscribirse" onclick="return validarTotal();" />
          </p>
        </fieldset>
    </form>
  </div>
  <!-- end login_form-->
  
  </section>
  </li>
  <li class="hide">
    <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
    <input type="hidden" id="idstamp" name="idstamp" value="UMNzPMBJAKJDRS+yIF9KnTpg/3fM+9os4GLiBNShDgc=" />
  </li>
  </ul>
</div>
<!--container--> 
<!-- end .content -->
</div>
