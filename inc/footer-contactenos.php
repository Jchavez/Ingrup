	<div id="wrapper_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-5" id="contact_form">
					<script type= "text/javascript">
					/*var RecaptchaOptions = {
						theme: 'white'
					};*/
					</script>
					<form role="form">
						<div class="form-group">
							<label style="float:left;">De:</label>
							<input type="text" class="form-control required" id="name" placeholder="Nombre Completo">
						</div>
						<div class="form-group">
							<label style="float:left;">Correo</label>
							<input type="email" class="form-control required validEmail" id="email" placeholder="persona@dominio.com">
						</div>
						<div class="form-group">
							<label style="float:left;">Asunto</label>
							<input type="text" class="form-control required" id="subject" placeholder="">
						</div>
						<div class="form-group">
							<label style="float:left;">Mensaje</label>
							<textarea class="form-control" rows="3" id="message"></textarea>
						</div>
						<div class="form-group">
							<?php
							/*
								require_once('lib/reCAPTCHA/recaptchalib.php');
								$publickey = "6LdVTf0SAAAAAJgYipSGJxlNJA-TRRoGAo0M7Qe_";
								echo recaptcha_get_html($publickey);
							*/
							?>
						</div>
						<input type="button" value="Enviar" class="btn btn-default" onclick="javascript:checkForm();" />
						<!--<button type="submit" class="btn btn-default">Enviar</button>-->
					</form>
				</div>
				<div class="col-md-5">
					<strong>PLANTAS DE PRODUCCI&Oacute;N</strong>
					<ul>
						<li><a href="contactenos-plantas-mexico.php">M&eacute;xico</a></li>
						<li><a href="contactenos-plantas-guatemala.php">Guatemala</a></li>
						<li><a href="contactenos-plantas-honduras.php">Honduras</a></li>
						<li><a href="contactenos-plantas-nicaragua.php">Nicaragua</a></li>
						<li><a href="contactenos-plantas-costa-rica.php">Costa Rica</a></li>
					</ul>
					
	


					<strong>OFICINAS COMERCIALES</strong>
					<ul>
						<li><a href="contactenos-oficinas-guatemala.php">Guatemala</a></li>
						<li><a href="contactenos-oficinas-elsalvador.php">El Salvador</a></li>
						<li><a href="contactenos-oficinas-honduras.php">Honduras</a></li>
						<li><a href="contactenos-oficinas-panama.php">Panam&aacute;</a></li>
						<li><a href="contactenos-oficinas-peru.php">Per&uacute;</a></li>
						<li><a href="contactenos-oficinas-republica-dominicana.php">Rep&uacute;blica Dominicana</a></li>
					</ul>

				</div>
				<div class="col-md-1">
				</div> 
			</div>
		</div>
	</div>


<?php require("_footer.php");?>
