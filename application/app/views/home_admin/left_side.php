<div class="sidebar1">
  <div id="nav">
    <ul id="menu" >
      <li><a href="#" class="categoria" >Administracion</a>
        <ul>
          <li><span><?php echo anchor('inscripcion/c_inscripcion/mostrarlo', '&raquo; Mostrar Datos'); ?></span></li>
          <li><span><?php echo anchor('','&raquo; Modificar Perfil'); ?></span></li>
        </ul>
      </li>
      <li><a href="#" class="categoria">Eventos</a>
        <ul>
          <li><a href="#">&raquo; VISION 2013</a>
            <ul>
              <li><span><?php echo anchor('administracion/c_administracion/mostrarlo/1', 'Asignar Expositor a Ponencia'); ?></span></li>
            </ul>
          </li>
          <li><a href="#">&raquo; SOCOTE 2013</a>
            <ul>
              <li><span><?php echo anchor('administracion/c_administracion/mostrarlo/2', 'Asignar Expositor a Ponencia'); ?></span></li>
            </ul>
          </li>
          <li><a href="#">&raquo; III Congreso de Educacion Virtual</a>
            <ul>
              <li><span><?php echo anchor('administracion/c_administracion/mostrarlo', 'Asignar Expositor a Ponencia'); ?></span></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="#" class="categoria">Asistencia</a>
        <ul>
          <li><a href="<?php echo base_url();?>seccion/registrarAsistencia">Registrar Asistencia</a></li>
           <li><a href="<?php echo base_url();?>seccion/consultarAsistencia">Consultar Asistencia</a></li>
        </ul>
      </li>
      <li><a href="#" class="categoria">Generar Cronograma</a>
        <ul>
          <li><a href="#">&raquo; Etc, Etc.</a></li>
        </ul>
      </li>
       <li><a href="<?php echo base_url();?>seccion/emitirCertificado" class="categoria">Emitir Certificado</a>
        
      </li>
      
      </li>
      <li><a href="<?php echo base_url();?>seguridad/login/logout" class="categoria" >Cerrar Sesion</a></li>
    </ul>
  </div>
  
  <!-- end .sidebar1 --></div>
