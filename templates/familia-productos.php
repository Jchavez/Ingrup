<?php 
	require_once("inc/header-productos.php");
?>
			<h1 class="textCenter blue">PRODUCTOS</h1>
			<?php
			// loop through the data from the database that we passed to this template
			foreach ($this->data['data'] as $friend) {
				echo $friend['id'].' - '.$friend['name'].'</br />';
			}
			?>
			<?php 	
			/*
			$family_products = $db->select('*','family_products');			
			foreach ($family_products as $family_product) {
				$id= $family_product["id"];
				$name= $family_product["name"];
				echo "<a href='categoria-productos.php?id=".$id."' alt='".$name."'>".$name."</a>";
				echo "<br />";
			}
			$arr=$db->select('*','family_products');
			print_r($arr);
			*/
			?>
			<!--<img src="img/construccion.png" class="img-responsive" style="margin:0 auto;" alt="Trabaje con Nosostros">-->

		</div>
	</div>
	<!-- end - CONTENT -->


<?php require_once("inc/footer.php");?>
 