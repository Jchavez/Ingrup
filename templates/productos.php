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
			';
			?>
		</div>
	</div>
	<br /><br />
	<div id="wrapper_content">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
			<?php 
			//print_r($this->data);
			$number=0;
			foreach ($this->data['data'] as $products) {
				$id= $products["id"];
				$name= $products["name"];
				$url_image= $GLOBALS["root"]."/images/products/".$products["main_image"];

				

				echo "
					<div style='background-image: url($url_image);' class='products'>
						<div class='mask-products' style='background-color:#".$background_colors[$number]."'>
						<a href='".$GLOBALS["root"]."producto/".$id."' alt='".$name."'><span>".$name."</span></a>
						</div>
					</div>
				";

				$number++;
			}

			?>	
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
	<!-- end - CONTENT -->

