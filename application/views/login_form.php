<!DOCTYPE HTML>
<html>
<head>
<title>Simple Login Form</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/login2.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset2.css" type="text/css" media="screen" charset="utf-8" />
</head>

<body>

<form action="<?php echo base_url();?>index.php/login/validate_credentials" method="post" accept-charset="utf-8" class="box login">
<p style="color:#FF0000;"><?php echo $mensaje; ?></p>
  <fieldset class="boxBody">
    <label>Usuario</label>
    <input type="text" name="username" placeholder=""  tabindex="1" required />
    <label>Password</label>
    <input type="password" name="password" value="" tabindex="2" required />
  </fieldset>
  <footer>
    <input type="submit" name="submit" value="Login" class="btnLogin" tabindex="4"  />
    <a href="<?php echo base_url();?>index.php/login/signup">Create una cuenta</a> </footer>
  <h3 style="font-size: 8pt; color:red"><?php echo validation_errors(); ?></h3>
</form>
</body>
</html>
