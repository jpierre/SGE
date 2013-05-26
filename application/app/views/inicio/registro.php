<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>MODUS</title>
		<!--[if lt IE 9]>
			<script src="<?php echo base_url(); ?>js/inicio2/css3-mediaqueries.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>css/inicio2/style.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/style_registro.css" type="text/css" media="screen" charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		
		
		<!-- JS -->
		<script src="<?php echo base_url(); ?>js/inicio2/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/login.js"></script>
		<script type='text/javascript' src="<?php echo base_url(); ?>js/funciones.js" ></script>
		
		
		<!--  <script src="<?php echo base_url(); ?>js/inicio2/less-grid-4.js"></script> -->
		<script src="<?php echo base_url(); ?>js/inicio2/custom.js"></script>
		<script src="<?php echo base_url(); ?>js/inicio2/tabs.js"></script>
		
		<!-- Masonry -->
		<script src="<?php echo base_url(); ?>js/inicio2/masonry.min.js" ></script>
		<script src="<?php echo base_url(); ?>js/inicio2/imagesloaded.js" ></script>
		<!-- ENDS Masonry -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/inicio2/jquery.tweet.css" media="all"  /> 
		<script src="<?php echo base_url(); ?>js/inicio2/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>css/inicio2/superfish.css" /> 
		<script  src="<?php echo base_url(); ?>js/inicio2/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="<?php echo base_url(); ?>js/inicio2/superfish-1.4.8/js/superfish.js"></script>
		<script  src="<?php echo base_url(); ?>js/inicio2/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="<?php echo base_url(); ?>js/inicio2/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>js/inicio2/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>js/inicio2/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="<?php echo base_url(); ?>js/inicio2/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="<?php echo base_url(); ?>js/inicio2/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Allan:700' rel='stylesheet' type='text/css'>
		
		<!-- Flex Slider -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/inicio2/flexslider.css" >
		<script src="<?php echo base_url(); ?>js/inicio2/jquery.flexslider-min.js"></script>
		<!-- ENDS Flex Slider -->
		
		
		<!--[if IE 6]>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/inicio2/ie6-hacks.css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url(); ?>js/inicio2/DD_belatedPNG.js"></script>
			<script>
          		/* EXAMPLE */
          		DD_belatedPNG.fix('*');
        	</script>
		<![endif]-->
		
		<!-- Lessgrid -->
		<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>css/inicio2/lessgrid.css"/>
		
		<!-- modernizr -->
		<script src="<?php echo base_url(); ?>js/inicio2/modernizr.js"></script>
		

	</head>
	
	<body lang="en">
	

		<!-- mobile-nav -->
		<div id="mobile-nav-holder">
			<div class="wrapper">
				<ul id="mobile-nav">
					<li><a href="<?php echo base_url(); ?>seccion/inicio">Inicio</a></li>
					<li><a href="<?php echo base_url(); ?>seccion/nuestraFacultad">Nuestra Facultad</a></li>
					<li><a href="<?php echo base_url(); ?>seccion/eventos">Eventos</a>
						<ul>
							<li><a href="page-full.php">SOCOTEC 2013</a></li>
							<li><a href="page-features.php">1ros Juegos Florales</a></li>
						</ul>
					</li>
					<li  class="current-menu-item"><a href="<?php echo base_url(); ?>seccion/registro">Registrate</a></li>
					<li><a href="<?php echo base_url(); ?>seccion/contacto">Contacto</a></li>
					<li><a href="<?php echo base_url(); ?>seccion/login">Login</a></li>
				</ul>
				<div id="nav-open"><a href="#">Menu</a></div>
			</div>
		</div>
		<!-- ENDS mobile-nav -->
			
		<header>
			
				
			<div class="wrapper">
					
				<a href="<?php echo base_url(); ?>seccion/inicio" id="logo"><img  src="<?php echo base_url(); ?>images/img/logo.png" alt="Tandem"></a>
				
				<nav>
					<ul id="nav" class="sf-menu">
						<li><a href="<?php echo base_url(); ?>seccion/inicio">Inicio<span class="subheader">Inicio</span></a></li>
						<li><a href="<?php echo base_url(); ?>seccion/nuestraFacultad">Nuestra Facultad<span class="subheader">FIA</span></a></li>
						<li><a href="<?php echo base_url(); ?>seccion/eventos">Eventos<span class="subheader">Eventos</span></a>
							<ul>
								<li><a href="page-full.php">SOCOTEC 2013</a></li>
								<li><a href="page-features.php">1ros Juegos Florales</a></li>
								<!--  <li><a href="page-typography.php">Typography</a></li>
								<li><a href="page-icons.php">Icons</a></li> -->
							</ul>
						</li>
						<li class="current-menu-item"><a href="<?php echo base_url(); ?>seccion/registro">Registrate<span class="subheader">Registrate</span></a></li>
						<li><a href="<?php echo base_url(); ?>seccion/contacto">Contacto<span class="subheader">Contacto</span></a></li>
						<li><a href="<?php echo base_url(); ?>seccion/login">Login<span class="subheader">Acerca de</span></a></li>
					</ul>
				</nav>
				
				<div class="clearfix"></div>
				
			</div>
		</header>
	
	
	
	
		<!-- MAIN -->
		<div id="main">
				
			<!-- social -->
			<div id="social-bar">
				<ul>
					<li><a href="https://www.facebook.com/fia.usmp" target="new_blank"  title="Hazte fan!"><img src="<?php echo base_url(); ?>images/img/social/facebook_32.png"  alt="Facebook" /></a></li>
					<li><a href="http://www.youtube.com/channel/UCQhn6EURMRlJ1znEP6qzoEA?feature=g-user-u"  target="new_blank" title="Suscribete!"><img src="<?php echo base_url(); ?>images/img/social/youtube_32.png" alt="Youtube" /></a></li>
					<li><a href="http://www.twitter.com" title="Sigue nuestros tweets!"><img src="<?php echo base_url(); ?>images/img/social/twitter_32.png"  alt="Twitter" /></a></li>
				</ul>
			</div>
			<!-- ENDS social -->
			
			
			
			<!-- Content -->
			<div id="content">
			
				<!-- masthead -->
		        <div id="masthead">
					<span class="head">Registrate</span>
					<ul class="breadcrumbs">
						<li><a href="index.php">Inicio</a></li>
						<li>/ Registro</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- page content -->
	        	<div id="page-content">
	        							
				<!-- form -->
					<form action="<?php echo base_url();?>inscripcion/c_registro/create_member" method="post" accept-charset="utf-8" class="box" >
    <div id="personal">
      <fieldset>
        <legend> Informacion Personal</legend>
        <br>
        <br>
        <label>Tipo de documento</label>
        <select name="tipo_doc" id="tipodoc">
          <option value="1">DNI</option>
          <option value="2">VISA</option>
          <option value="3">Carnet de extranjeria</option>
        </select>
        <br>
        <br>
        <label>Numero de documento*</label>
        <input  name="dni" id="numerodoc" onblur="return validar();" type="text"  required="required" value="<?php echo set_value('dni'); ?>"/>
        <br>
        <br>
        <span style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('dni'); ?></span>
        <label>Nombres*</label>
        <input type="text" name="nombres"  required="required"  value="<?php echo set_value('nombres'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('nombres'); ?></a>
        <label>Apellido Paterno*</label>
        <input type="text" name="ape_pat" required="required" value="<?php echo set_value('ape_pat'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('ape_pat'); ?></a>
        <label>Apellido Materno*</label>
        <input type="text" name="ape_mat" required="required" value="<?php echo set_value('ape_mat'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('ape_mat'); ?></a>
        <label>Telefono Fijo</label>
        <input type="text" name="fijo" value="<?php echo set_value('fijo'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('fijo'); ?></a>
        <label>Celular*</label>
        <input type="text" name="celular" required="required" value="<?php echo set_value('celular'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('celular'); ?></a>
        <label>Correo*</label>
        <input type="text" name="email_adress" required="required" value="<?php echo set_value('email_adress'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('email_adress'); ?></a>
        <label>Direccion</label>
        <input type="text" name="direccion" required="required" value="<?php echo set_value('direccion'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('direccion'); ?></a>
        <label>Usuario*</label>
        <input type="text" name="username" required="required" value="<?php echo set_value('username'); ?>"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('username'); ?></a>
        <label>Password*</label>
        <input type="password" required="required" name="password"/>
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('password'); ?></a>
        <label>Confirmar Password*</label>
        <input type="password" required="required" name="password2">
        <br>
        <br>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('password2'); ?></a>
        </p>
      </fieldset>
    </div>
    <div id="empresa">
      <fieldset>
        <legend>Informacion sobre su empresa</legend>
        <br>
        <label>Empresa</label>
        <input type="text" name="empresa" value="<?php echo set_value('empresa'); ?>"/>
        <br>
        <br>
        <label>RUC</label>
        <input type="text" name="ruc" value="<?php echo set_value('ruc'); ?>"/>
        <br>
        <br>
        <label>Cargo</label>
        <input type="text" name="cargo" value="<?php echo set_value('cargo'); ?>"/>
        <br>
        <br>
        <label>Departamento</label>
        <select name="dpto">
          <option value="1" >Administracion</option>
          <option value="2" >Area Tecnica</option>
          <option value="3" >Asesoria</option>
          <option value="4" >Comercio Electronico</option>
          <option value="5" >Compras</option>
          <option value="6" >Controlling</option>
          <option value="7" >Derecho</option>
          <option value="8" >Finanzas y Contabilidad</option>
          <option value="9" >Capacitacion</option>
          <option value="10" >Gerencia</option>
          <option value="11" >Gestion de Riesgos</option>
          <option value="12" >Ingenieria</option>
          <option value="13" >Diseño</option>
        </select>
        <br>
        <br>
        <label>Sector</label>
        <select name="sector_ind">
          <option value="1" >Banca y Seguros</option>
          <option value="2" >Construccion e Inmobiliaria</option>
          <option value="3" >Energia</option>
          <option value="4" >Industria</option>
          <option value="5" >Mineria</option>
          <option value="6" >Tecnologia de Informacion</option>
          <option value="7" >Telecomunicaciones</option>
        </select>
        <br>
        <br>
        <!-- Todavia no se define nada acerca de "tipo_usuario" solo esta en la vista-->
        <label>Representante de su empresa?</label>
        <br />
        <input type="checkbox" name="tipo_usuario" value="4">
        <br>
        <br>
        <label>Como se entero del evento?</label>
        <select name="como">
          <option value="1" >Facebook</option>
          <option value="2" >Pagina USMP</option>
          <option value="3" >Medios de Prensa</option>
        </select>
        <br>
        <br>
        
        
        
    <?php echo $captcha['image'] ?>
    <input type="text" name="captcha" />
    <input type="hidden" value="<?php echo $captcha['word']?>" name="string_captcha" />
    <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('captcha'); ?></a>
 
        
        
        <!-- ><img style="margin-left:150px;" src="<?php echo base_url();?>seguridad/login/captcha" alt="captcha" /><br>
        <br />
        <label>Ingrese caracteres </label>
        <input type="text" name="captcha" class="input1"/>
        <a style="text-decoration: none; font-size: 8pt; color:red"><?php echo form_error('captcha'); ?></a> <br>
        <!-- <h3 style="font-size: 8pt; color:red"><?php echo validation_errors(); ?></h3> --> 
        <br>
        <br>
        <input  class="button orange" type="submit" name="submit" value="Registrarse" >
        </input>
      </fieldset>
    </div>
  </form>
					<!-- ENDS form -->				
						
				</div>
	        	<!-- ENDS page content -->
			
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
		<footer>
			<div class="wrapper">
			
				<ul id="footer-cols">
					
					<li class="first-col">
						
						<div class="widget-block">
							<h4>Recent posts</h4>
							<div class="recent-post">
								<a href="#" class="thumb"><img src="<?php echo base_url(); ?>images/img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span>March 12, 2011</span>
								</div>
							</div>
							<div class="recent-post">
								<a href="#" class="thumb"><img src="<?php echo base_url(); ?>images/img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span>March 12, 2011</span>
								</div>
							</div>
							<div class="recent-post">
								<a href="#" class="thumb"><img src="<?php echo base_url(); ?>images/img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span>March 12, 2011</span>
								</div>
							</div>
						</div>
					</li>
					
					<li class="second-col">
						
						<div class="widget-block">
							<h4>Dummy text</h4>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
						</div>
						
					</li>
					
					<li class="third-col">
						
						<div class="widget-block">
							<div id="tweets" class="footer-col tweet">
		         				<h4>Twitter widget</h4>
		         			</div>
		         		</div>
		         		
					</li>	
				</ul>				
				<div class="clearfix"></div>
				
				
			</div>
			
			<div id="to-top"></div>
		</footer>
		
	</body>
	
</html>