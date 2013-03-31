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
          <li><a href="<?php echo base_url(); ?>index.php/welcome">Inicio</a></li>
          <li><a href="#">Quienes somos?</a></li>
          <li class="selected"><a href="<?php echo base_url(); ?>index.php/login/eventos">Eventos</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/login/signup">Registrate</a></li>
          <li><a href="#">Contactanos</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/login/index">Login</a></li>
         
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
        <h1>Eventos</h1>
       
       <article>
       <h2>Vision</h2>
       El XVII Congreso Internacional de Ingeniería y XI Arquiforo “Visión 2012”, es el evento anual que realiza la Facultad de Ingeniería y Arquitectura de la Universidad de San Martín de Porres, para poner al alcance de alumnos, egresados y profesionales las innovaciones tecnológicas y metodológicas de última generación para complementar la capacitación, desarrollo e integración de los mismos.

Organizado por las Escuelas Profesionales de Ingeniería de Computación y Sistemas, Ingeniería Industrial, Ingeniería Electrónica, Ingeniería Civil, Ingeniería en Industrias Alimentarias, Arquitectura y Ciencias Aeronáuticas de la USMP.
<a href="<?php echo base_url(); ?>index.php/login/signup">Registrate</a>
       
       
       
       </article>
       
       <article>
       <h2>Cloud Google</h2>
       <p>Con Google Cloud Connect for Microsoft Office, varios usuarios pueden modificar un mismo documento en los conocidos programas de Microsoft&reg; Office. Puedes compartir, realizar copias de seguridad y modificar simult&aacute;neamente documentos de Microsoft Word, PowerPoint&reg; y Excel&reg; con tus compa&ntilde;eros de trabajo.&nbsp;<br>
         <br>
         En los v&iacute;deos siguientes ver&aacute;s c&oacute;mo Google Cloud Connect incorpora trucos nuevos en tus documentos de siempre    <a href="<?php echo base_url(); ?>index.php/login/signup">Registrate</a>.</p>

       </article>
       
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
