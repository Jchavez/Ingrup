<?php 
	require("inc/header-productos.php");
?>
			<?php 
				$id= $_GET["id"];
				$products =  $database->query("select products.id, products.name from products inner join category_products on products.category_products_id=category_products.id WHERE category_products.id=$id");
				print_r($products);
				echo count($products);
				if(count($products)>0){
					foreach ($products as $product) {
						$id= $product["id"];
						$name= $product["name"];
						echo "<a href='producto.php?id=".$id."' alt='".$name."'>".$name."</a>";
						echo "<br />";
					}
				}else{

					$category_products =  $database->query("select * from category_products WHERE category_products.id=$id");
					foreach ($category_products as $category_product) {
						$id= $category_product["id"];
						$name= utf8_decode($category_product["name"]);
						$description= $category_product["description"];
						$main_image= $category_product["main_image"];

						echo "<h1 class='textCenter blue'>".$name."</h1>";
						echo 
						"<div class='row'>
							<div class='col-md-2'></div>
							<div class='col-md-4'>
								<img src='images/category_products/".$main_image."' alt='".$name."' class='img-responsive' />										
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
					echo "no hay articulos";
				}
			?>
			<!--<img src="img/construccion.png" class="img-responsive" style="margin:0 auto;" alt="Trabaje con Nosostros">-->

		</div>
	</div>
	<!-- end - CONTENT -->


<?php require("inc/footer.php");?>
