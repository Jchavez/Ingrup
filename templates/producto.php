<?php  
	require_once("inc/header-productos.php");
?>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-5">
				<br /><br /><br /><br />
				<?php 
					$url_image= $GLOBALS["root"]."/images/products/".$this->data['data']['0']["main_image"];
					$name= $this->data['data']['0']['name'];
					echo "<img src='".$url_image."' alt='".$name."' class='img-responsive'>"
				?>	
				<br /><br />
				</div>
				<div class="col-md-4">
					<div>
						<div class="header-detail-products">
						</div>
						<div class="detail-products">
							<div>
								<p class="name">
									<?php echo $name ?>
								</p>
								<p class="description">
									<?php echo $this->data['data']['0']['description']; ?>
								</p>
							</div>
						</div>
					</div>	

				</div>
			</div>
		</div>
	</div>
	<!-- end - CONTENT -->

