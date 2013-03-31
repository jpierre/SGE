
  <header>
  
   <link rel="stylesheet" href="<?php echo base_url(); ?>css/style2.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen" charset="utf-8" />
</header>  

<div id="login_form">

	<h1>Login</h1>

	<form action="<?php echo base_url();?>index.php/login/validate_credentials" method="post" accept-charset="utf-8">
    <label>Usuario</label><input type="text" name="username" value=""  />
    <label>Password</label><input type="password" name="password" value=""  />
    <input type="submit" name="submit" value="Login"  />
    <a href="<?php echo base_url();?>index.php/login/signup">Create una cuenta</a></form>
    <h3 style="font-size: 8pt; color:red"><?php echo validation_errors(); ?></h3>

</div><!-- end login_form-->


	
