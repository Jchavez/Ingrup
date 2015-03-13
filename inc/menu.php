<!-- MENU -->
<div id="wrapper_menu">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Menu</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<?php
							$inicio="";
							$conozcanos="";
							$catalogodeproductos="";
							$sostenibilidad="";
							$noticias="";
							$trabajeconnosotros="";
							$contactenos="";

							$currentPage= str_replace($GLOBALS["root"],"",$_SERVER['REQUEST_URI']);

							switch ($currentPage){
								case 'conozcanos':
									$conozcanos="active";
									break;
								case 'catalogo-de-productos':
									$catalogodeproductos="active";
									break;
								case 'sostenibilidad':
									$sostenibilidad="active";
									break;
								case 'noticias':
									$noticias="active";
									break;
								case 'empleo':
									$trabajeconnosotros="active";
									break;
								case 'contactenos':
									$contactenos="active";
									break;
								/*default:
									$inicio="active";*/
							}
							echo '<li class="'.$inicio.'"><a href="'.$GLOBALS["root"].'">Inicio</a></li>';
							echo '<li class="'.$conozcanos.'"><a href="'.$GLOBALS["root"].'conozcanos">Con&oacute;zcanos</a></li>';
							echo '<li class="'.$catalogodeproductos.'"><a href="'.$GLOBALS["root"].'catalogo-de-productos">Productos</a></li>';
							echo '<li class="'.$sostenibilidad.'"><a href="'.$GLOBALS["root"].'sostenibilidad">Sostenibilidad</a></li>';
							echo '<li class="'.$noticias.'"><a href="'.$GLOBALS["root"].'noticias">Noticias</a></li>';
							echo '<li class="'.$trabajeconnosotros.'"><a href="'.$GLOBALS["root"].'empleo">Int&eacute;grate</a></li>';
							echo '<li class="'.$contactenos.'"><a href="'.$GLOBALS["root"].'contactenos">Cont&aacute;ctenos</a></li>';
							?>
						</ul>
						<!--
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Búsqueda">
							</div>
						</form>
						-->
					</div>
				</div>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- end - MENU -->