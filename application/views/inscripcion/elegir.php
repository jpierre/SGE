<div id="inscribir" align="center">
<?php
  if($id_evento==1){
   	echo anchor('inscripcion/inscribir/registro_externo/1/1', 'Inscribime').'<br />';
  	echo anchor('inscripcion/inscribir/registro_externo/1/2', 'Inscribir personas');
  }else{
  	echo anchor('inscripcion/inscribir/registro_externo/2/1', 'Inscribirme').'<br />';
  	echo anchor('inscripcion/inscribir/registro_externo/2/2', 'Inscribir personas');
  }
?> 

  
  


</div><!-- end login_form-->