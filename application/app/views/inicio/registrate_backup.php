<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>MODUS</title>
		<!--[if lt IE 9]>
			<script src="<?php echo base_url(); ?>js/inicio2/css3-mediaqueries.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>css/inicio2/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		
		
		<!-- JS -->
		<script src="<?php echo base_url(); ?>js/inicio2/jquery-1.6.4.min.js"></script>
		
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
					
				<a href="<?php echo base_url(); ?>seccion/inicio2" id="logo"><img  src="<?php echo base_url(); ?>images/img/logo.png" alt="Tandem"></a>
				
				<nav>
					<ul id="nav" class="sf-menu">
						<li><a href="<?php echo base_url(); ?>seccion/inicio2">Inicio<span class="subheader">Inicio</span></a></li>
						<li><a href="<?php echo base_url(); ?>seccion/nuestraFacultad2">Nuestra Facultad<span class="subheader">FIA</span></a></li>
						<li><a href="<?php echo base_url(); ?>seccion/eventos2">Eventos<span class="subheader">Eventos</span></a>
							<ul>
								<li><a href="page-full.php">SOCOTEC 2013</a></li>
								<li><a href="page-features.php">1ros Juegos Florales</a></li>
								<!--  <li><a href="page-typography.php">Typography</a></li>
								<li><a href="page-icons.php">Icons</a></li> -->
							</ul>
						</li>
						<li class="current-menu-item"><a href="<?php echo base_url(); ?>seccion/registro2">Registrate<span class="subheader">Registrate</span></a></li>
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
					<form id="contactForm" action="#" method="post">
						<h2>Forma parte de nuestra comunidad !</h2>
						<h4>----- Informacion Personal -----</h4>
						<table>
							<tr>
								<td><label>Tipo de Documento: <label></td>
								<td><select name="tipo_doc" id="tipodoc">
						          <option value="1">DNI</option>
						          <option value="2">VISA</option>
						          <option value="3">Carnet de extranjeria</option>
						        </select></td>
							</tr>
							<tr>
								<td><label>Numero de DOC<label></td>
								<td><input name="name"  id="name" type="text" class="form-poshytip" title="Puede ser 8,10 o 12 digitos" /></td>
							</tr>
							<tr>
								<td><label>Nombres<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Ingrese sus nombres" /></td>
							</tr>
							<tr>
								<td><label>Apellido Paterno<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Ingrese su apellido materno" /></td>
							</tr>
							<tr>
								<td><label>Apellido Materno<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Ingrese su apellido paterno" /></td>
							</tr>
							<tr>
								<td><label>Telefono Fijo<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" /></td>
							</tr>
							<tr>
								<td><label>Celular<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" /></td>
							</tr>
							<tr>
								<td><label>Correo<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" /></td>
							</tr>
							<tr>
								<td><label>Direccion<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" /></td>
							</tr>
							<tr>
								<td><label>Usuario<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" /></td>
							</tr>
							<tr>
								<td><label>Password<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" /></td>
							</tr>
							<tr>
								<td><label>Confirmar Password<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" /></td>
							</tr>
						</table>
							<h4 class="heading">----- Informacion sobre su Empresa -----</h4>
						<table>
							<tr>
								<td><label>Razon Social<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" /></td>
							</tr>
							<tr>
								<td><label>RUC<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" /></td>
							</tr>
							<tr>
								<td><label>Cargo<label></td>
								<td><input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" /></td>
							</tr>
							<tr>
								<td><label>Departamento: <br><label></td>
								<td><select name="dpto">
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
						        </select></td>
							</tr>
							<tr>
								<td><label>Sector: <br><label></td>
								<td><select name="sector_ind">
						          <option value="1" >Banca y Seguros</option>
						          <option value="2" >Construccion e Inmobiliaria</option>
						          <option value="3" >Energia</option>
						          <option value="4" >Industria</option>
						          <option value="5" >Mineria</option>
						          <option value="6" >Tecnologia de Informacion</option>
						          <option value="7" >Telecomunicaciones</option>
						        </select></td>
							</tr>
							<tr>
								<td><label>Como se entero de nuestra web? <br><label></td>
								<td><select name="como">
						          <option value="1" >Facebook</option>
						          <option value="2" >Pagina USMP</option>
						          <option value="3" >Medios de Prensa</option>
						        </select></td>
							</tr>
							<tr>
								<td><label>Representa Ud. a su Organizacion?<label></td>
								<td><input type="checkbox" name="tipo_usuario" value="4"></td>
							</tr>
							
							
							<!-- send mail configuration -->
							<td><input type="hidden" value="email@yourserver.com" name="to" id="to" /></td>
							<td><input type="hidden" value="Enter the subject here" name="subject" id="subject" /></td>
							<td><input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" /></td>
							<!-- ENDS send mail configuration -->
												
						</table>
						<p><input type="button" value="Registrarme" name="submit" id="submit" /></p>
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