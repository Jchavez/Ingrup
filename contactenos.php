<?php require("inc/header.php");?>
<?php require("inc/menu.php");?>
	
	<!--<img src="img/headerContactenos.png" class="img-responsive">-->
	<!-- MAPS -->
	<div class="wrapper_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7998855.8781160945!2d-87.42609475926446!3d11.786769125916573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f0b58c0f7680811%3A0x8dace0c7060b2570!2sCentral+America!5e0!3m2!1ses!2sgt!4v1415308679568" width="100%" height="400" frameborder="0" style="border:0"></iframe>
	</div>
	<!--end  - MAPS -->

	<!-- CONTENT -->
	<div id="wrapper_content">
		<div class="container">
			<h1 class="textCenter blue">CONT&Aacute;CTENOS</h1>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<script type= "text/javascript">
					var RecaptchaOptions = {
						theme: 'white'
					};
					</script>
					<form role="form" method="post" action="lib/reCAPTCHA/verify.php">
						<div class="form-group">
							<label>De:</label>
							<input type="text" class="form-control" id="" placeholder="Nombre Completo">
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="email" class="form-control" id="" placeholder="persona@dominio.com">
						</div>
						<div class="form-group">
							<label>Asunto</label>
							<input type="text" class="form-control" id="" placeholder="">
						</div>
						<div class="form-group">
							<label>Mensaje</label>
							<textarea class="form-control" rows="3"></textarea>
						</div>
						<div class="form-group">
							<?php
								require_once('lib/reCAPTCHA/recaptchalib.php');
								$publickey = "6LdVTf0SAAAAAJgYipSGJxlNJA-TRRoGAo0M7Qe_";
								echo recaptcha_get_html($publickey);
							?>
						</div>
						<button type="submit" class="btn btn-default">Enviar</button>
					</form>
				</div> 
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
	<!-- end - CONTENT -->

	





<?php require("inc/footer.php");?>
