<?php 
	require("inc/header-productos.php");
?>
			<?php 
				$id= $_GET["id"];
				$products =  $database->query("select * from products WHERE products.id=$id");
				//print_r($family_products);
				foreach ($products as $product) {
					$id= $product["id"];
					$name= $product["name"];
					$description= $product["description"];
					$main_image= $product["main_image"];

					echo "<h1 class='textCenter blue'>".$name."</h1>";
					echo 
					"<div class='row'>
						<div class='col-md-2'></div>
						<div class='col-md-4'>
							<img src='images/products/".$main_image."' alt='".$name."' class='img-responsive' />										
						</div>
						<div class='col-md-4'>
						<br />
						<p>
							".$description."
						</p>
						</div>
						<div class='col-md-2'></div>
					</div>";
				}
			?>
			<!--<img src="img/construccion.png" class="img-responsive" style="margin:0 auto;" alt="Trabaje con Nosostros">-->

		</div>
	</div>
	<!-- end - CONTENT -->


<?php require("inc/footer.php");?>
