<div class="sidebar1">
    <div id="nav">
                        <ul id="menu" >
                           <li><a href="#" class="categoria" >Informacion Personal</a>
                                <ul>
                                	<li><a href="<?php echo base_url();?>index.php/login/ver_perfil">&raquo; Ver Perfil</a></li>
                                	<li><span><?php echo anchor('','&raquo; Modificar Perfil'); ?></span></li>
                                </ul>
                          </li>
                          <li><a href="#" class="categoria">Eventos</a>
                                <ul>
                                <li><span><?php echo anchor('inscripcion/c_inscripcion/index/1', '&raquo; VISION 2013'); ?></span></li>
                                <li><span><?php echo anchor('inscripcion/c_inscripcion/index/2', '&raquo; Cloud Google'); ?></span></li>
                                <li><span><?php echo anchor('', '&raquo; Android Lima Day'); ?></span>
                                        <ul>
                                        <li><a href="#">Ponencia 1</a></li>
                                        <li><a href="#">Ponencia 2</a></li>
                                        <li><a href="#">Ponencia 3</a></li>
                                        </ul>
                                </li>
                                </ul>
                           </li>
                           <li><a href="#" class="categoria">Horarios</a>
                                <ul>
                                <li><a href="#">&raquo; Etc, Etc.</a></li>
                                </ul>
                           </li>
                           <li><a href="<?php echo base_url();?>index.php/login/generar_QR">Generar Codigo QR</a></a>
                               
                           </li>
                           <li><a href="" class="categoria">Acerca De</a></li>
                           </li>
                           <li><a href="<?php echo base_url();?>index.php/login/logout" class="categoria" >Cerrar Sesion</a></li>
                           
                    </ul>
      </div>
    
<!-- end .sidebar1 --></div>