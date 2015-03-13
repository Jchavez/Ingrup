<?php 
	require_once("inc/header-productos.php");

	echo '<div class="header-catalog-products">
		   <img src="'.$GLOBALS["root"].'img/headerProductos.jpg">';
?>
		<div class="menu-catalog-products">
			<a href="catalogo-de-productos" alt="Regresar Catalogo de Productos" class="item">
				<span>Industrias</span>
			</a>
		</div>
	</div>
	<br /><br />
	<div id="wrapper_content">
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<?php	
					echo "<ul class='family_products'>";
					$counter=0;
					$number=0;

					foreach ($this->data['data'] as $industries) {
						$id= $industries["id"];
						$name= $industries["name"];
						$counter++;		
						$number++;			

						if($counter==3 || $counter==9 || $counter==15 || $counter==21 || $counter==27){
							echo "<li style='background:#".$background_colors[$number-1].";'>
									<span class='number'>".$number."</span>
									<a href='familia-industrias/".$id."' alt='".$name."'><span>".$name."</span></a>
								  </li>
								  <li style='background:white;'><a href='#'></a></li>
								  <li style='background:white;'><a href='#'></a></li>";			
						}
						else if($counter==6 || $counter==12 || $counter==18 || $counter==24 || $counter==30){
							echo "<li style='background:#".$background_colors[$number-1].";'><span class='number'>".$number."</span><a href='familia-industrias/".$id."' alt='".$name."'><span>".$name."</span></a></li>";	
						}else{
							echo "<li style='background:#".$background_colors[$number-1].";'><span class='number'>".$number."</span><a href='familia-industrias/".$id."' alt='".$name."'><span>".$name."</span></a></li>
								  <li style='background:white;'><a href='#'></a></li>";				
						}							

						
						
					}	
					echo "</ul>";	
					?>	
				</div>
				<div class="col-md-1"></div>
			</div>
			<!--
			<img src="img/construccion.png" class="img-responsive" style="margin:0 auto;" alt="Productos">
			-->

		</div>
	</div>
	<!-- end - CONTENT -->



 