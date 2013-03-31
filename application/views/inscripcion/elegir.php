<div id="inscribir" align="center" style="position:absolute; left:50%; top:150px;">
<?php
  if($id_evento==1){
   	echo anchor('inscripcion/inscribir/registro_externo/1/1', 'Inscripbirte tu mismo').'<br />';
  	echo anchor('inscripcion/inscribir/registro_externo/1/2', 'Inscribir personas');
  }else{
  	echo anchor('inscripcion/inscribir/registro_externo/2/1', 'Inscripbirte tu mismo').'<br />';
  	echo anchor('inscripcion/inscribir/registro_externo/2/2', 'Inscribir personas');
  }
?> 

  
  


</div><!-- end login_form-->