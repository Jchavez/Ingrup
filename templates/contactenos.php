<?php require("inc/header-contactenos.php");?>
	<!-- CONTENT -->
	<div id="wrapper_content">
		<div class="container">
			<h1 class="textCenter blue">CONT&Aacute;CTENOS</h1>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<?php 
						foreach ($this->data['data'] as $contact) {
					?>
					<h2><?php echo $contact['title']; ?></h2>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>TELEFONO</th>
								<th>DIRECCION</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="glyphicon glyphicon-earphone"></span><?php echo $contact['telefono']; ?></td>
								<td><span class="glyphicon glyphicon-home"></span> <?php echo $contact['direccion']; ?></td>
							</tr>
						</tbody>
					</table>
					<?php 
						} 
					?>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
	<!-- end - CONTENT -->
<?php require("inc/footer-contactenos.php");?>