<?php 
	require_once("inc/header-productos.php");
?>
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

