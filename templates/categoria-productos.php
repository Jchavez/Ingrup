<?php 
	require_once("inc/header-productos.php");
?>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
			<?php 
			//print_r($this->data);
			$number=0;
			foreach ($this->data['data'] as $category_products) {
				$id= $category_products["id"];
				$name= $category_products["name"];
				$url_image= $GLOBALS["root"]."/images/category_products/".$category_products["main_image"];

				

				echo "
					<div style='background-image: url($url_image);' class='category_products'>
						<div class='mask-category_products' style='background-color:#".$background_colors[$number]."'>
						<a href='".$GLOBALS["root"]."productos/".$id."' alt='".$name."'><span>".$name."</span></a>
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

