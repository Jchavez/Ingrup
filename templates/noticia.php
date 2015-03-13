<?php require_once("inc/menu.php");
	
	echo '<img src="'.$GLOBALS["root"].'img/headerNoticias.jpg" class="img-responsive">';
?>
	<!-- CONTENT -->
	<div id="wrapper_content">
		<div class="container">
			<?php
						foreach ($this->data['data'] as $new) {
							$id= $new["id"];
							$title= $new["title"];
							$description= $new["description"];
							$date_publication= $new["date_publication"];
							$link_mp4= $new["link_mp4"];
							$link_ogv= $new["link_ogv"];
							$link_webm= $new["link_webm"];
							$main_image= $new["main_image"];
					?>
			<h1 class="textCenter blue"><?php echo $title; ?></h1>
			<!--<div class="row">
				<div class="col-md-7">-->
					
						<section class="news">
							<div class="row">
								<div class="col-md-7">
									<p>
										<?php 
											//echo $description; 
											echo $description;
										?> 
									</p>								
								</div>
								<div class="col-md-5">
									<?php 
										if ($link_mp4!="" && $link_ogv!="" && $link_webm!="") {									
											echo '
											<video width="100%" height="100%" controls>
												<source src="'.$GLOBALS["root"].'media/news/'.$link_mp4.'" type="video/mp4">
												<source src="'.$GLOBALS["root"].'media/news/'.$link_webm.'" type="video/webm">
												<source src="'.$GLOBALS["root"].'media/news/'.$link_ogv.'" type="video/ogg">
												Your browser does not support the video tag.
											</video>';
										}else{
											echo "<img src='".$GLOBALS["root"]."images/news/".$main_image."' class='img-responsive' alt='".$title."'>";
										}
									?>
								</div>
							</div>
						</section>
						<hr>
					<?php 
						}
					?>
				<!--</div>
				<div class="col-md-5">
				</div>
			</div>-->
		</div>
	</div>
	<!-- end - CONTENT -->
