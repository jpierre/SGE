<!DOCTYPE HTML>
<html>

<head>
  <title>EventSystem</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen" charset="utf-8" />
 
 
 
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="#">Event<span class="logo_colour">system</span></a></h1>
          <h2>Sistema de gestion de eventos FIA.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">Inicio</a></li>
          <li><a href="#">Quienes somos?</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/login/eventos">Eventos</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/login/signup">Registrate</a></li>
          <li><a href="#">Contactanos</a></li>
          <li>
          
          <a href="<?php echo base_url(); ?>index.php/login/index">Login</a>
          
          
          
          </li>
         
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Noticias</h3>
            <h4>Vision 2013</h4>
            <h5>Octubre 2013</h5>
            <p>Eventos vision.&nbsp;<a href="#">leer mas</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Eventos</h3>
            <ul>
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Buscar</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <h1>Sistema de gestion de eventos</h1>
        <p>&nbsp;</p>
        <h2>Introduccion</h2>
        <p>&nbsp;</p>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Inicio</a> | <a href="examples.html">Quienes somos?</a> | <a href="page.html">Eventos</a> | <a href="another_page.html">Registrate</a> | <a href="contact.html">Login</a></p>
      <p>Copyright &copy;:) | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> |</p>
    </div>
    <p>&nbsp;</p>
  </div>
</body>
</html>
