<?php 
	require_once("inc/header-productos.php");
?>

			<!--<h1 class="textCenter blue">PRODUCTOS</h1>-->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<?php	
					echo "<ul class='family_products'>";
					$counter=0;
					$number=0;

					foreach ($this->data['data'] as $family_products) {
						$id= $family_products["id"];
						$name= $family_products["name"];
						$counter++;		
						$number++;			

						if($counter==3 || $counter==9 || $counter==15 || $counter==21 || $counter==27){
							echo "<li style='background:#".$background_colors[$number-1].";'>
									<span class='number'>".$number."</span>
									<a href='categoria-productos/".$id."' alt='".$name."'><span>".$name."</span></a>
								  </li>
								  <li style='background:white;'><a href='#'></a></li>
								  <li style='background:white;'><a href='#'></a></li>";			
						}
						else if($counter==6 || $counter==12 || $counter==18 || $counter==24 || $counter==30){
							echo "<li style='background:#".$background_colors[$number-1].";'><span class='number'>".$number."</span><a href='categoria-productos/".$id."' alt='".$name."'><span>".$name."</span></a></li>";	
						}else{
							echo "<li style='background:#".$background_colors[$number-1].";'><span class='number'>".$number."</span><a href='categoria-productos/".$id."' alt='".$name."'><span>".$name."</span></a></li>
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



 