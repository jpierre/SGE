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
                                        <li><span><?php echo anchor('administrador/administrador/vistaListarPonencias', 'Mantener Ponencias'); ?></span></li>
                                        <li><span><?php echo anchor('', 'Mantener Expositor'); ?></span></li>
                                        </ul>
                                </li>
                                <li><a href="#">&raquo; Cloud Google</a>
                                        <ul>
                                        <li><span><?php echo anchor('administrador/administrador/mostrarlo2', 'Mantener Ponencia'); ?></span></li>
                                        <li><span><?php echo anchor('administrador/administrador/mostrarlo/2', 'Asignar Expositor a Ponencia'); ?></span></li>
                                        </ul>
                                </li>
                                <li><a href="#">&raquo; Android Lima Day</a>
                                        <ul>
                                        <li><span><?php echo anchor('administrador/administrador/mostrarlo2', 'Mantener Ponencia'); ?></span></li>
                                        <li><span><?php echo anchor('administrador/administrador/mostrarlo', 'Asignar Expositor a Ponencia'); ?></span></li>
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