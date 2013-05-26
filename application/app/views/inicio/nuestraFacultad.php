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
					<li  class="current-menu-item"><a href="<?php echo base_url(); ?>seccion/nuestraFacultad">Nuestra Facultad</a></li>
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
						<li class="current-menu-item"><a href="<?php echo base_url(); ?>seccion/nuestraFacultad">Nuestra Facultad<span class="subheader">FIA</span></a></li>
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
					<span class="head">USMP - Facultad de Ingenieria y Arquitectura</span><span class="subhead">Bienvenido</span>
					<ul class="breadcrumbs">
						<li><a href="index.php">Inicio</a></li>
						<li>/ Nuestra Facultad</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
	        	
	        	
	        	
	        	<!-- posts list -->
	        	<div id="posts-list">
	        	
					<article class="format-standard">
						
						<div class="feature-image">
							<a href="<?php echo base_url(); ?>images/img/slides/01.jpg" data-rel="prettyPhoto"><img src="<?php echo base_url(); ?>images/img/slides/01.jpg" alt="Alt text" /></a>
						</div>
						
						<h1><a href="single.php" class="post-heading">Facultad de Ingenieria y Arquitectura</a></h1>
						<div class="meta">
							<!-- <span class="entry-day">23</span>
							<span class="entry-year">sep 2011</span>
							<span class="entry-date">23 Sep, 2011</span>
							in <span class="categories"><a href="#">Category 1</a>, <a href="#">Category 2</a></span> -->
						</div>
						
						
						<div class="excerpt">La filosofia que inspiro la fundacion de la USMP se orienta a la busqueda de la verdad (VERITAS LIBERABIT VOS) y a la preparacion de profesionales altamente capacitados, con cultura humanistica y criterios de permanente actualizacion y superacion. Formar a los estudiantes dentro de normas eticas y principios democraticos constituye uno de sus objetivos prioritarios.
						</div>
						
						<!-- <a href="single.php" class="read-more">read more</a>-->
						
					</article>
			
	        	</div>
	        	<!-- ENDS posts list -->
	        	
	        	
	        	<!-- sidebar -->
	        	<aside id="sidebar">
	        		
	        		<div class="block">
		        		<h4>Carreras Profesionales</h4>
						<ul>
							<li class="cat-item"><a href="#" title="View all posts">Ing. Computacion y Sistemas</a></li>
							<li class="cat-item"><a href="#" title="View all posts">Ing. Industrial</a></li>
							<li class="cat-item"><a href="#" title="View all posts">Ing. Civil</a></li>
							<li class="cat-item"><a href="#" title="View all posts">Ing. Electronica</a></li>
							<li class="cat-item"><a href="#" title="View all posts">Ing. en Industrias Alimentarias</a></li>
							<li class="cat-item"><a href="#" title="View all posts">Arquitectura</a></li>
						</ul>
	        		</div>
	        		
	        		<div class="block">
		        		<h4>archives</h4>
						<ul>
							<li class="cat-item"><a href="#" title="View all posts">January</a></li>
							<li class="cat-item"><a href="#" title="View all posts">February</a></li>
							<li class="cat-item"><a href="#" title="View all posts">March</a></li>
						</ul>
	        		</div>
	        	
	        	</aside>
	        	<div class="clearfix"></div>
				<!-- ENDS sidebar -->
				
				
				<!-- pager -->
        		<!--  <ul class="pager">
					<li class="paged">Page 1 of 2</li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
				</ul>
				<div class="clearfix"></div> -->
	        	<!-- ENDS pager -->
			
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