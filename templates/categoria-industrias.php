<?php 
	require_once("inc/header-productos.php");

	echo '<div class="header-catalog-products">
		   <img src="'.$GLOBALS["root"].'img/headerProductos.jpg">';
?>
		<div class="menu-catalog-products">
			<?php 
			echo
			'<a href="'.$GLOBALS["root"].'catalogo-de-productos" alt="Regresar Catalogo de Productos" class="item">
				<span>Productos</span>
			</a>
			<a href="'.$GLOBALS["root"].'familia-industrias" alt="Regresar a Familia Industrias" class="item">
				<span>Familias</span>
			</a>';
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
			foreach ($this->data['data'] as $category_industries) {
				$id= $category_industries["id"];
				$name= $category_industries["name"];
				$url_image= $GLOBALS["root"]."/images/category_industries/".$category_industries["main_image"];

				

				echo "
					<div style='background-image: url($url_image);' class='category_products'>
						<div class='mask-category_products' style='background-color:#".$background_colors[$number]."'>
						<a href='".$GLOBALS["root"]."productos-industrias/".$id."' alt='".$name."'><span>".$name."</span></a>
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

