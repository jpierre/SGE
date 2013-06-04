<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>Eventos FIA - USMP</title>
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>css/menu.css"/>
		<script type='text/javascript' src="<?php echo base_url(); ?>js/funciones.js" ></script>
		<script type='text/javascript' src="<?php echo base_url(); ?>js/generarPDF.js" ></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/base64.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/sprintf.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jspdf.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jspdf.plugin.addimage.js"></script>

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
					<li  class="current-menu-item"><a href="<?php echo base_url(); ?>seccion/inicio">Inicio</a></li>
					<li><a href="<?php echo base_url(); ?>seccion/nuestraFacultad">Nuestra Facultad</a></li>
					<li><a href="<?php echo base_url(); ?>seccion/eventos">Eventos</a>
						<ul>
							<li><a href="page-full.php">SOCOTEC 2013</a></li>
							<li><a href="page-features.php">1ros Juegos Florales</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url(); ?>seccion/registro">Registrate</a></li>
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
						<li><a href="<?php echo base_url(); ?>seccion/registro">Registrate<span class="subheader">Registrate</span></a></li>
						<li><a href="<?php echo base_url(); ?>seccion/contacto">Contacto<span class="subheader">Contacto</span></a></li>
						<li class="current-menu-item"><a href="<?php echo base_url(); ?>seccion/login">Login<span class="subheader">Acerca de</span></a></li>
					</ul>
				</nav>
				
				<div class="clearfix"></div>
				
			</div>
		</header>