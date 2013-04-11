<div class="sidebar1">
    <div id="nav">
                        <ul id="menu" >
                           <li><a href="#" class="categoria" >Administracion</a>
                                <ul>
                                	<li><span><?php echo anchor('inscripcion/inscribir/mostrarlo', '&raquo; Mostrar Datos'); ?></span></li>
                                    <li><span><?php echo anchor('','&raquo; Modificar Perfil'); ?></span></li>
                                </ul>
                          </li>
                          <li><a href="#" class="categoria">Eventos</a>
                                <ul>
                                <li><a href="#">&raquo; Mantener</a>
                                        <ul>
                                        <li><span><?php echo anchor('administrador/c_mantenerPonencia/vistaListarPonencias', 'Mantener Ponencias'); ?></span></li>
                                        <li><span><?php echo anchor('', 'Mantener Expositor'); ?></span></li>
                                        <li><span><?php echo anchor('', 'Mantener Aula'); ?></span></li>
                                        <li><span><?php echo anchor('', 'Mantener Ambiente'); ?></span></li>
                                        </ul>
                                </li>
                                </ul>
                           </li>
                           <li><a href="#" class="categoria">Horarios</a>
                                <ul>
                                <li><a href="#">&raquo; Etc, Etc.</a></li>
                                </ul>
                           </li>
                           <li><a href="#" class="categoria">Generar Codigo QR</a>
                                <ul>
                                <li><a href="#">&raquo; Etc, Etc. </a></li>
                                </ul>
                           </li>
                           <li><a href="" class="categoria">Acerca De </a></li>
                           </li>
                           <li><a href="<?php echo base_url();?>index.php/login/logout" class="categoria" >Cerrar Sesion</a></li>
                           
                    </ul>
      </div>
    
<!-- end .sidebar1 --></div>