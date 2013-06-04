
	        							
				<!-- form -->
					<script type="text/javascript" src="<?php echo base_url(); ?>js/inicio2/form-validation.js"></script>
					<form id="contactForm" action="<?php echo base_url();?>seguridad/login/validate_credentials" method="post">
						<h2 class="heading">Ingresa tus datos</h2>
						<table>
						<tr>
								<td><label>Usuario</label></td>
								<td><input name="username"  type="text" class="form-poshytip" title="Ingresa tu usuario" /></td>
								<td><a style="text-decoration: none; font-size: 8pt; color:red"><?=form_error('username'); ?></a></td>
						</tr>
						<tr>					
								<td><label>Password</label></td>
								<td><input name="password" type="password" class="form-poshytip" title="Ingresa tu password" /></td>
								<td><a style="text-decoration: none; font-size: 8pt; color:red"><?=form_error('password'); ?></a></td>
						<tr>
						</table>
							<p><input type="submit" name="submit" value="Entrar"/></p>
						
					</form>
					<!-- ENDS form -->				
						
			