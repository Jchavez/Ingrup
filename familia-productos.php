<?php 
	require("inc/header-productos.php");
?>
			<h1 class="textCenter blue">PRODUCTOS</h1>
			<?php 
				//$family_products = R::findAll('family_products');
				$family_products = $database->select("family_products", ["id","name"]);
				foreach ($family_products as $family_product) {
					$id= $family_product["id"];
					$name= $family_product["name"];
					//echo $id." - ".$name."<br />";
					echo "<a href='categoria-productos.php?id=".$id."' alt='".$name."'>".$name."</a>";
					echo "<br />";
				}
			?>
			<!--<img src="img/construccion.png" class="img-responsive" style="margin:0 auto;" alt="Trabaje con Nosostros">-->

		</div>
	</div>
	<!-- end - CONTENT -->


<?php require("inc/footer.php");?>
