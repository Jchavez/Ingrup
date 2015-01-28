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
							echo 
							'<li><a href="'.$GLOBALS["root"].'">Inicio</a></li>
							<li><a href="'.$GLOBALS["root"].'conozcanos">Con&oacute;zcanos</a></li>
							<li class=""><a href="'.$GLOBALS["root"].'familia-productos">Productos</a></li>
							<li class=""><a href="'.$GLOBALS["root"].'trabaje-con-nosotros">Trabaje con Nosotros</a></li>
							<li class=""><a href="'.$GLOBALS["root"].'sostenibilidad">Sostenibilidad</a></li>
							<li class=""><a href="'.$GLOBALS["root"].'contactenos">Cont&aacute;ctenos</a></li>';
							?>
						</ul>
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Búsqueda">
							</div>
						</form>
					</div>
				</div>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- end - MENU -->