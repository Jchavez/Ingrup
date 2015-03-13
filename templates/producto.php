<?php  
	require_once("inc/header-productos.php");

	echo '<div class="header-catalog-products">
		   <img src="'.$GLOBALS["root"].'img/headerProductos.jpg">';
?>
		<div class="menu-catalog-products">
			<?php 
			//$referer=$_SERVER['HTTP_REFERER'];
			echo
			'
			<a href="'.$GLOBALS["root"].'catalogo-de-productos" alt="Regresar Catalogo de Productos INGRUP" class="item">
				<span>Productos</span>
			</a>
			<a href="'.$GLOBALS["root"].'familia-productos" alt="Regresar Catalogo de Productos INGRUP" class="item">
				<span>Familias</span>
			</a>
			<a href="" alt="Cotizar Producto INGRUP" class="btnProduct quote" id="add_quote">
				<span>Cotizar</span>
			</a>
			<a href="'.$GLOBALS["root"].'ficha-tecnica/'.$this->data['data']['0']["id"].'" alt="Cotizar Producto INGRUP" class="btnProduct downloadFile">
				<span>Ficha</span>
			</a>
			';
			//'.$GLOBALS["root"].'contactenos/interes/'.$this->data['data']['0']['name'].'
			?>
		</div>
	</div>
	<br /><br />
	<div id="wrapper_content">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-5">
				<?php 
					$url_image= $GLOBALS["root"]."images/".$this->data['folderImages']."/".$this->data['data']['0']["main_image"];
					$name= $this->data['data']['0']['name'];
				?>
				<!--
				<div class="product-preview">
					<div class="product-img">
				-->
						<?php
							echo "<img src='".$url_image."' alt='".$name."' class='img-responsive'>";
						?>
				<!--
						<img id="mask" class="mask img-responsive" src="<?php echo $GLOBALS["root"];?>/images/mask.png" />	
					</div>
					<div class="swatch">
						<a rel="32,223,95" href="#mask" title="Green">Green</a>
						<a rel="255,211,8" href="#mask" title="Yellow">Yellow</a>
						<a rel="255,101,8" href="#mask" title="Orange">Orange</a>
						<a rel="16,200,255" href="#mask" title="Blue">Blue</a>
						<a rel="142,8,255" href="#mask" title="Purple">Purple</a>
						<a rel="245,25,45" href="#mask" title="Red">Red</a>
					</div>

				</div>-->
				<br /><br />
				</div>
				<div class="col-md-4">
					<div>
						<div class="header-detail-products">
						</div>
						<div class="detail-products">
							<div>
								<p class="name">
									<?php echo $name ?>
								</p>
								<p class="description">
									<?php echo $this->data['data']['0']['description']; ?>
								</p>
								<p>
									<?php
										$url_image2= $GLOBALS["root"]."/img/iconFile.jpg";
										
										echo "<a href='".$GLOBALS["root"].'ficha-tecnica/'.$this->data['data']['0']["id"]."'><img src='".$url_image2."' alt='".$name."' class='img-responsive'></a>";
									?>
								</p>
							</div>
						</div>
					</div>	

				</div>
			</div>
		</div>
	</div>
	<!-- end - CONTENT -->

