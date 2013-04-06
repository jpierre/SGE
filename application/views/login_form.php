
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style2.css" type="text/css" media="screen" charset="utf-8" /> 
    
    <!-- ARRIBA VA INCLUDES/HEADER.PHP -->

<div id="content_header"></div>
<div id="site_content">


<div id="sidebar_container">
  <div class="sidebar">
    <div class="sidebar_top"></div>
    <div class="sidebar_item"> 
      
      <h3>Noticias</h3>
      <h4>Vision 2013</h4>
      <h5>Octubre 2013</h5>
      <p>.....&nbsp;<a href="#">leer mas</a></p>
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
    <div class="sidebar_base"></div>
  </div>
</div>


<div id="content">
<div id="stylized">

	<h1>Login</h1>

	<form action="<?php echo base_url();?>index.php/login/validate_credentials" method="post" accept-charset="utf-8">
    <fieldset>
    <label>Usuario</label><input type="text" name="username" value=""  /><br />
    <label>Password</label><input type="password" name="password" value=""  />
    <input type="submit" name="submit" value="Login"  />
    <a href="<?php echo base_url();?>index.php/login/signup">Create una cuenta</a>

</fieldset>
  </form>
    
    
    <h3 style="font-size: 8pt; color:red"><?php echo validation_errors(); ?></h3>

</div><!-- end login_form-->

</div>
	
