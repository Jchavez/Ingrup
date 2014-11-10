<?php require("inc/header.php");?>
<?php require("inc/menu.php");?>
	
	<img src="img/headerTrabajeConNosotros.jpg" class="img-responsive">
	<!-- CONTENT -->
	<div id="wrapper_content">
		<div class="container">
			<h1 class="textCenter blue">TRABAJE CON NOSOTROS</h1>
		</div>
	</div>
	<!-- end - CONTENT -->


<div id="wrapper_footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!--<h1 class="textCenter">TRABAJE CON NOSOTROS</h1>-->
				<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-8">
						<script type= "text/javascript">
						var RecaptchaOptions = {
							theme: 'white'
						};
						</script>
						<form role="form"><!--method="post" action="lib/reCAPTCHA/verify.php"-->
							<div class="form-group">
								<label>De:</label>
								<input type="text" class="form-control" name="from" id="from" class="required">
							</div>
							<div class="form-group">
								<label>Correo</label>
								<input type="email" class="form-control" name="email" id="email" class="required validEmail">
							</div>
							<div class="form-group">
								<label>CV</label>
								<input type="file" class="form-control" name="attachment" id="attachment" placeholder="">
							</div>
							<div class="form-group">
								<label>Mensaje</label>
								<textarea class="form-control" rows="3" name="message" id="message"></textarea>
							</div>
							<input type="button" class="btn btn-default" value="Enviar" onclick="javascript:checkForm();" />
						</form>
					</div> 
					<div class="col-md-2">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	


<?php require("_footer.php");?>