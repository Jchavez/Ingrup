<?php  
	require_once("inc/header-productos.php");

	echo '<div class="header-catalog-products">
		   <img src="'.$GLOBALS["root"].'img/headerProductos.jpg">';
?>		
		<div class="menu-catalog-products">
		
			<?php 
			$referer=$_SERVER['HTTP_REFERER'];
			echo
			'
			<a href="'.$GLOBALS["root"].'catalogo-de-productos" alt="Regresar Catalogo de Productos INGRUP" class="item">
				<span>Productos</span>
			</a>
			<a href="'.$GLOBALS["root"].'familia-productos" alt="Regresar Catalogo de Productos INGRUP" class="item">
				<span>Familias</span>
			</a>
			<a href="'.$referer.'" alt="Regresar Catalogo de Productos INGRUP" class="item">
				<span>Regresar</span>
			</a>	
			';
			?>
		
		</div>
		
	</div>

<div class="modal fade bs-example-modal-sm" id="modalPlane" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $this->data['data']['0']['name']; ?></h4>
      </div>
      <div class="modal-body">
		<?php 
			$url_image= $GLOBALS["root"]."images/".$this->data['folderImages']."/".$this->data['data']['0']["main_image"];
			$name= $this->data['data']['0']['name'];
			echo "<img src='".$url_image."' alt='".$name."' class='img-responsive'>";
		?>
      </div>
    </div>
  </div>
</div>
	<br /><br />
	<div id="wrapper_content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<br /><br /><br />
					<?php 
						$url_image= $GLOBALS["root"]."images/".$this->data['folderImages']."/".$this->data['data']['0']["main_image"];
						$name= $this->data['data']['0']['name'];
						echo "<a href='#' id='openPlane'><img  src='".$url_image."' alt='".$name."' class='img-responsive'></a>";
					?>
				</div>
				<div class="col-md-9">
					<h2 class="title_technical"><?php echo $this->data['data']['0']['name']; ?></h2>
					
					<!--DESCRIPTION-->
					<div class="bar_techical">
						<img src="<?php echo $GLOBALS["root"];?>img/bar_techical-icon1.jpg" alt="icon INGRUP" class="icon">
						<div class="bar_techical-title" style="background:#de455d;">
							<span>1.</span><div>Descripci&oacute;n De Producto</div>
						</div>
						<div class="bar_techical-border" style="background:#de455d;"></div>
					</div>
					<div class="info_techical">
						<?php echo $this->data['data']['0']['datasheet_description']; ?>
					</div>

					<!--MATERIALS-->
					<div class="bar_techical">
						<img src="<?php echo $GLOBALS["root"];?>img/bar_techical-icon2.jpg" alt="icon INGRUP" class="icon">
						<div class="bar_techical-title" style="background:#c2cb37;">
							<span>2.</span><div>Materiales</div>
						</div>
						<div class="bar_techical-border" style="background:#c2cb37;"></div>
					</div>
					<div class="info_techical">
						<?php echo $this->data['data']['0']['datasheet_materials']; ?>
					</div>

					<!--FEATURES-->
					<div class="bar_techical">
						<img src="<?php echo $GLOBALS["root"];?>img/bar_techical-icon3.jpg" alt="icon INGRUP" class="icon">
						<div class="bar_techical-title" style="background:#189fad;">
							<span>3.</span><div>Caracter&iacute;sticas</div>
						</div>
						<div class="bar_techical-border" style="background:#189fad;"></div>
					</div>
					<div class="info_techical">
						
						<?php 
							if($this->data['data']['0']["datasheet_weight"]!=""){
						?>
						<br /><br />
						<div class="row">
							<div class="col-md-2">
								<h4 style="text-align:center;margin:0;">Peso</h4>
								<p><img src="<?php echo  $GLOBALS["root"]; ?>img/peso.jpg" class="img-responsive"></p>
							</div>
							<div class="col-md-10">
								<?php 
									$url_image_datasheet_weight= $GLOBALS["root"]."images/".$this->data['folderImages']."/features/".$this->data['data']['0']["datasheet_weight"];
									$name= $this->data['data']['0']['name'];
									echo "<img  src='".$url_image_datasheet_weight."' alt='".$name."' class='img-responsive'>";
								?>
							</div>
						</div>
						<br /><br />
						<?php 
							} 
							if($this->data['data']['0']["datasheet_dimensions"]!=""){
						?>
						
						<div class="row">
							<div class="col-md-2">
								<h4 style="text-align:center;margin:0;">Medidas</h4>
								<p><img src="<?php echo  $GLOBALS["root"]; ?>img/medidas.jpg" class="img-responsive"></p>
							</div>
							<div class="col-md-10">
								<?php 
									$url_image_datasheet_dimensions= $GLOBALS["root"]."images/".$this->data['folderImages']."/features/".$this->data['data']['0']["datasheet_dimensions"];
									$name= $this->data['data']['0']['name'];
									echo "<img  src='".$url_image_datasheet_dimensions."' alt='".$name."' class='img-responsive'>";
								?>
							</div>
						</div>
						<br /><br />
						<?php 
							} 
						?>
					</div>

					<!--Packaging & Storage-->
					<div class="bar_techical">
						<img src="<?php echo $GLOBALS["root"];?>img/bar_techical-icon4.jpg" alt="icon INGRUP" class="icon">
						<div class="bar_techical-title" style="background:#f9b330;">
							<span>4.</span><div>Empaque y Almacenaje</div>
						</div>
						<div class="bar_techical-border" style="background:#f9b330;"></div>
					</div>
					<div class="info_techical">
						<br /><br />
						<div class="row">
							<div class="col-md-6">
								<div class="packaging-info radius">
									<div class="row">
										<div class="col-md-12">
											<h4 style="text-align:center;margin:0;">Empaque</h4><br />
											<img src="<?php echo  $GLOBALS["root"]; ?>img/empaque.jpg" class="img-responsive">
											<?php echo $this->data['data']['0']['datasheet_packaging']; ?>
										</div>										
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="storage-info radius">
									<div class="row">
										<div class="col-md-12">
											<h4 style="text-align:center;margin:0;">Almacenaje</h4><br />
											<img src="<?php echo  $GLOBALS["root"]; ?>img/almacenaje.jpg" class="img-responsive">								
											<?php echo $this->data['data']['0']['datasheet_storage']; ?>
											<br /><br />
										</div>										
									</div>
								</div>
							</div>
						</div>
						
					</div>


					<div class="bar_techical">
						<img src="<?php echo $GLOBALS["root"];?>img/bar_techical-icon1.jpg" alt="icon INGRUP" class="icon">
						<div class="bar_techical-title" style="background:#565656;">
							<span>5.</span><div>Pedido M&iacute;nimo</div>
						</div>
						<div class="bar_techical-border" style="background:#565656;"></div>
					</div>
					<div class="info_techical">
						<?php echo $this->data['data']['0']['datasheet_order']; ?>
					</div>

					<div class="bar_techical">
						<img src="<?php echo $GLOBALS["root"];?>img/bar_techical-icon2.jpg" alt="icon INGRUP" class="icon">
						<div class="bar_techical-title" style="background:#1e89af;">
							<span>6.</span><div>Colores Disponibles</div>
						</div>
						<div class="bar_techical-border" style="background:#1e89af;"></div>
					</div>
					<div class="info_techical">
						<?php echo $this->data['data']['0']['datasheet_colors']; ?>
					</div>
					<br /><br />


				</div>
			</div>
		</div>
	</div>
	<!-- end - CONTENT -->

