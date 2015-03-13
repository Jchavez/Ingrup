<?php require_once("inc/menu.php");?>
	
	<img src="img/headerNoticias.jpg" class="img-responsive">
	<!-- CONTENT -->
	<div id="wrapper_content">
		<div class="container">
			<h1 class="textCenter blue">NOTICIAS</h1>
			<!--<div class="row">
				<div class="col-md-7">-->
					<?php
					function ttruncat($text,$numb,$idNew) {
						if (strlen($text) > $numb) { 
							$text = substr($text, 0, $numb); 
							$text = substr($text,0,strrpos($text," ")); 
							$etc = " ... <a href='".$GLOBALS["root"]."noticia/".$idNew."' alt=''>Ver Más</a>";  
							$text = $text.$etc; 
						}
						return $text; 
					}
					?>
					<?php
						foreach ($this->data['data'] as $news) {
							$id= $news["id"];
							$title= $news["title"];
							$description= $news["description"];
							$date_publication= $news["date_publication"];
							$link_mp4= $news["link_mp4"];
							$link_ogv= $news["link_ogv"];
							$link_webm= $news["link_webm"];
							$main_image= $news["main_image"];
					?>
						<section class="news">
							<div class="row">
								<div class="col-md-7">
									<h2><?php echo $title; ?></h2>
									<p>
										<?php 
											//echo $description; 
											echo ttruncat($description,250,$id);
										?> 
									</p>								
								</div>
								<div class="col-md-5">
									<?php 
										if ($link_mp4!="" && $link_ogv!="" && $link_webm!="") {									
											echo '
											<video width="100%" height="100%" controls>
												<source src="media/news/'.$link_mp4.'" type="video/mp4">
												<source src="media/news/new1/'.$link_webm.'" type="video/webm">
												<source src="media/news/new1/'.$link_ogv.'" type="video/ogg">
												Your browser does not support the video tag.
											</video>';
										}else{
											echo "<img src='images/news/".$main_image."' class='img-responsive' alt='".$title."'>";
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
