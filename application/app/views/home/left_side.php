<div class="sidebar1">
    <div id="nav">
                        <ul id="menu" >
                           <li><a href="#" class="categoria" >Informacion Personal</a>
                                <ul>
                                	<li><a href="<?php echo base_url();?>seccion/ver_perfil">&raquo; Ver Perfil</a></li>
                                	<li><span><?php echo anchor('','&raquo; Modificar Perfil'); ?></span></li>
                                </ul>
                          </li>
                          <li><a href="#" class="categoria">Eventos</a>
                                <ul>
                                <?php for($i=0; $i<count($eventos); $i++){?>
                                <li><span><?php echo anchor('inscripcion/c_inscripcion/index/'.$eventos[$i]->id_eve, '&raquo; '.$eventos[$i]->nom_eve); ?></span></li>
                                <?php }?>
                                </ul>
                           </li>
                           <li><a href="#" class="categoria">Horarios</a>
                                
                           </li>
                           <li><a href="<?php echo base_url();?>seccion/generar_QR" class="categoria">Generar Codigo QR</a></a>
                               
                           </li>
                           <li><a href="" class="categoria">Acerca De</a></li>
                           </li>
                           <li><a href="<?php echo base_url();?>seguridad/login/logout" class="categoria" >Cerrar Sesion</a></li>
                           
                    </ul>
      </div>
    
<!-- end .sidebar1 --></div>