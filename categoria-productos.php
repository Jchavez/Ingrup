<?php 
	require("inc/header-productos.php");
?>
			<!--<h1 class="textCenter blue">PRODUCTOS</h1>-->
			<?php 
				$id= $_GET["id"];

				$test=$database->select("category_products",["[>]family_products" => ["family_products_id" => "family_products.id"]],["category_products.id", "category_products.name", "category_products.main_image"],["family_products_id"=>$id]);


				$category_products =  $database->query("select category_products.id, category_products.name, category_products.main_image from category_products inner join family_products on category_products.family_products_id=family_products.id WHERE family_products_id=$id");
				print_r($category_products);

				if(count($category_products)>0){
					echo "<ul>";
					foreach ($category_products as $category_product) {
						$id= $category_product["id"];
						$name= $category_product["name"];
						$main_image= $category_product["main_image"];
						echo "<li>";
						echo "<img src='images/category_products/".$main_image."' alt='".$name."' class='img-responsive'>";
						echo "<a href='productos.php?id=".$id."' alt='".$name."'>".$name."</a>";
						echo "</li>";
					}
					echo "</ul>";
				}else{
					echo "no hay articulos";
				}
			?>
		</div>
	</div>
	<!-- end - CONTENT -->


<?php require("inc/footer.php");?>
