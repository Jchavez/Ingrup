	<div id="wrapper_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-5" id="contact_form">
					<form role="form">
						<?php
						if ($this->data['productName']!=""){
							//echo '<input type="hidden" name="nombreDelProducto" id="nombreDelProducto" value="'.$this->data['productName'].'">';
						?>
						<div class="form-group">
							<textarea class="form-control required clean" rows="3" id="nombreDelProducto">Estoy interesado en el siguiente producto: <?php echo $this->data['productName']; ?>
							</textarea>
						</div>
						<?php 
							}
						?>
						<div class="form-group">
							<label>De: (*)</label>
							<input type="text" class="form-control required clean" id="name" placeholder="Nombre Completo">
						</div>
						<div class="form-group">
							<label>Correo: (*)</label>
							<input type="email" class="form-control required validEmail clean" id="email" placeholder="persona@dominio.com">
						</div>
						<div class="form-group">
							<label>Asunto: (*)</label>
							<input type="text" class="form-control required clean" id="subject" placeholder="">
						</div>
						<div class="form-group">
							<label>Pa&iacute;s: (*)</label>
							<input type="text" class="form-control required clean" id="country" placeholder="">
						</div>
						<div class="form-group">
							<label>Mercado: (*)</label>
							<select class="form-control required" id="market">
								<option value="Bebidas">Bebidas</option>								
								<option value="Lacteos">Lacteos</option>
								<option value="Alimentos">Alimentos</option>
								<option value="Food Service">Food Service</option>
								<option value="Home Care">Home Care</option>
								<option value="Química y Pintura">Química y Pintura</option>
								<option value="Hogar">Hogar</option>
								<option value="Sanitización">Sanitización</option>
								<option value="Industria de Plástico">Industria de Plástico</option>
								<option value="Industria Farmaceutica">Industria Farmaceutica</option>
								<option value="Industrias Varias">Industrias Varias</option>
								<option value="Recursos Humanos">Recursos Humanos</option>	
								<option value="Otros">Otros</option>	
							</select> 
						</div>
						<div class="form-group">
							<label>Mensaje: (*)</label>
							<textarea class="form-control required clean" rows="3" id="message"></textarea>
						</div>
						<div class="form-group">
							<?php
								echo '<img src="'.$GLOBALS["root"].'lib/captcha/captcha.php" border="0" alt="Ingrup Security" class="img-responsive" />';
							?>
						</div>
						<div class="form-group">
							<input type="text" class="form-control required clean" name="code" id="code" placeholder="Código de Seguridad" />
						</div>
						<div class="form-group">							
							<input type="button" value="Enviar" class="btn btn-default" onclick="javascript:checkForm();" />
						</div>						
					</form>
				</div>
				<div class="col-md-5">
					<strong>PLANTAS DE PRODUCCI&Oacute;N</strong>
					<ul>
						<li><a href="contactenos-plantas-mexico">M&eacute;xico</a></li>
						<li><a href="contactenos-plantas-guatemala">Guatemala</a></li>
						<li><a href="contactenos-plantas-honduras">Honduras</a></li>
						<li><a href="contactenos-plantas-nicaragua">Nicaragua</a></li>
						<li><a href="contactenos-plantas-costa-rica">Costa Rica</a></li>
					</ul>
					
					<strong>OFICINAS COMERCIALES</strong>
					<ul>
						<li><a href="contactenos-oficinas-guatemala">Guatemala</a></li>
						<li><a href="contactenos-oficinas-elsalvador">El Salvador</a></li>
						<li><a href="contactenos-oficinas-honduras">Honduras</a></li>
						<li><a href="contactenos-oficinas-panama">Panam&aacute;</a></li>
						<li><a href="contactenos-oficinas-peru">Per&uacute;</a></li>
						<li><a href="contactenos-oficinas-republica-dominicana">Rep&uacute;blica Dominicana</a></li>
					</ul>

				</div>
				<div class="col-md-1">
				</div> 
			</div>
		</div>
	</div>

