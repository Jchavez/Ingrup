<?php 
require 'lib/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(); 

$app->get('/', function () use ($app) {
	$app->render('inicio.php', array(
			'page_title' => "Inicio | INGRUP"
		)
	);
});

$app->get('/conozcanos', function () use ($app) {
	$app->render('conozcanos.php', array(
			'page_title' => "Conozcanos | INGRUP"
		)
	);
});

$app->get('/familiaProductos', function () use ($app) {
	require_once 'lib/mysql.php';
	$db = connect_db();
	$result = $db->query( 'SELECT id, name FROM family_products;' );
	while ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
		$data[] = $row;
	}	

	$app->render('familia-productos.php', array(
			'page_title' => "Productos | INGRUP",
			'data' => $data
		)
	);
});

$app->get('/trabajeConNosotros', function () use ($app) {
	$app->render('trabaje-con-nosotros.php', array(
			'page_title' => "Trabaje con Nosotros | INGRUP"
		)
	);
});

$app->get('/sostenibilidad', function () use ($app) {
	$app->render('sostenibilidad.php', array(
			'page_title' => "Sostenibilidad | INGRUP"
		)
	);
});

$app->get('/contactenos', function () use ($app) {
	$array = array(
		"planta" =>	
			array(
				"title"=>"",
				"telefono" => "+(502) 2326-5700",
				"direccion" => "Av. Petapa y 56 Calle, zona 12, Ciudad de Guatemala, Guatemala")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-plantas-mexico', function () use ($app) {
	$array = array(
		"planta1" =>	
			array(
				"title"=>"Empaques de Irapuato, S.A. De C.V",
				"telefono" => "+(52) (462) 6066444 / +(52) (462) 6066445 <br/>&nbsp;&nbsp;&nbsp;&nbsp; +(52) (462) 6066446 / +(52) (462) 6259048",
				"direccion" => "Carretera Irapuato Abasolo Km. 6,  <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Purísima del Jardín, CP36557, Irapuato, <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciudad de Guanajuato, M&eacute;xico"),
		"planta2" =>	
		array(
			"title"=>"CemsaPack, S.A. de C.V",
			"telefono" => "+(52) 728 - 2840193 y 98",
			"direccion" => "Parque Industrial La Bomba, número 103 y 105 <br/>&nbsp;&nbsp;&nbsp;&nbsp; Bodegas 2 y 3, CP52000, Lerma, <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciudad de M&eacute;xico, M&eacute;xico")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-plantas-guatemala', function () use ($app) {
	$array = array(
		"planta1" =>	
			array(
				"title"=>"Proveedora de Servicios",
				"telefono" => " +(502) 2310-5200 / +(502) 2442-0122",
				"direccion" => " Calzada Atanasio Tzul 22-41, zona 12, <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciudad de Guatemala, Guatemala"),
		"planta2" =>	
		array(
			"title"=>"Inyectores de Pl&aacute;stico",
			"telefono" => " +(502) 2326-5700",
			"direccion" => " Av. Petapa y 56 Calle, zona 12, <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciudad de Guatemala, Guatemala"),
		"planta3" =>	
		array(
			"title"=>"Central de Empaques",
			"telefono" => "+(502) 2326-5600",
			"direccion" => " Av. Petapa y 56 Calle, zona 12, <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciudad de Guatemala, Guatemala")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-plantas-honduras', function () use ($app) {
	$array = array(
		"planta1" =>	
		array(
			"title"=>"EPP Honduras",
			"telefono" => " +(504) 2670-2220 al 29",
			"direccion" => " Kilometro 13, desvío a residencial Monte Maria, <br/> &nbsp;&nbsp;&nbsp;&nbsp;Dos Caminos, Ciudad Villanueva, Cortes,<br/> &nbsp;&nbsp;&nbsp;&nbsp;Honduras.")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-plantas-nicaragua', function () use ($app) {
	$array = array(
		"planta1" =>	
		array(
			"title"=>"EPP Nicaragua",
			"telefono" => " +(505) 2251-3964",
			"direccion" => " Carretera Norte Km 5 1/2. Parque Industrial<br/>&nbsp;&nbsp;&nbsp; Portezuelo, de la Aguja 1/2 Cuadra al Este, <br/>&nbsp;&nbsp;&nbsp;&nbsp;3 cuadras al sur 1/2 al este. Nave #37, <br/>&nbsp;&nbsp;&nbsp;&nbsp;Ciudad de Managua, Nicaragua")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-plantas-costa-rica', function () use ($app) {
	$array = array(
		"planta1" =>	
		array(
			"title"=>"EPP Costa Rica",
			"telefono" => " +(506) 2265-6500 / +(506) 2265-8138",
			"direccion" => " De la Cervecería Costa Rica al Este 1 Km, <br/>&nbsp;&nbsp;&nbsp;&nbsp;Ciudad de Heredia, Costa Rica")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-oficinas-guatemala', function () use ($app) {
	$array = array(
		"oficina1" =>	
		array(
			"title"=>"DISPASA Central",
			"telefono" => " +(502) 2232-9127 al 29",
			"direccion" => " 10a. Avenida 21-71, zona 1, <br/> &nbsp; &nbsp;&nbsp;Ciudad de Guatemala, Guatemala"),
		"oficina2" =>	
		array(
			"title"=>"DISPASA Atanasio",
			"telefono" => " +(502) 2477-6907 / +(502) 2477-6908 <br/>&nbsp; &nbsp;&nbsp; +(502) 2477-6913",
			"direccion" => " Calzada Atanasio Tzul 42-14, zona 12, <br/> &nbsp; &nbsp;&nbsp;Ciudad de Guatemala, Guatemala"),
		"oficina3" =>	
		array(
			"title"=>"DISPASA Atl&aacute;ntico",
			"telefono" => " +(502) 2256-0269 / +(502) 2256-0241",
			"direccion" => " Km  7 Ruta al Atlántico, zona 17, <br/> &nbsp; &nbsp;&nbsp; Ciudad de Guatemala, Guatemala"),
		"oficina4" =>	
		array(
			"title"=>"DISPASA Xela",
			"telefono" => " +(502) 7763-6611 y 6219",
			"direccion" => " 9a. Calle 24B-49, zona 7, Ofibodegas Occidente #3, <br/> &nbsp; &nbsp;&nbsp;Ciudad de Quetzaltenango, Guatemala")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-oficinas-elsalvador', function () use ($app) {
	$array = array(	
		"oficina1" =>	
		array(
			"title"=>"Empaques y Productos de Pl&aacute;stico, S.A. de C.V, <br/>El Salvador",
			"telefono" => " +(503) 2278-7918",
			"direccion" => " Boulevard Vijosa, Edificio Salaverría Cáceres,<br/>&nbsp;&nbsp;&nbsp; Bodegas 1,2 y 3, Ciudad Merliot Antiguo Cuscatlan,<br/>&nbsp;&nbsp;&nbsp; El Salvador")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-oficinas-honduras', function () use ($app) {
	$array = array(	
		"oficina1" =>	
		array(
			"title"=>"Empaques y Productos de Pl&aacute;stico Honduras",
			"telefono" => " +(504) 2560-0134 ",
			"direccion" => " Colonia Santa Maria, 27 calle S. E, frente a<br/>&nbsp;&nbsp;&nbsp; gasolinera UNO. Ciudad de San Pedro Sula, <br/>&nbsp;&nbsp;&nbsp;&nbsp;Cortes, Honduras. ")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-oficinas-panama', function () use ($app) {
	$array = array(	
		"oficina1" =>	
		array(
			"title"=>"Empaques y Productos de Pl&aacute;stico Panam&aacute;",
			"telefono" => " +(507) 831-5568",
			"direccion" => " Calle 50, PH Torre Global Bank, Piso 32, Of.: 3203. <br/> &nbsp; &nbsp;&nbsp;Ciudad de Panam&aacute;, Panam&aacute;")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-oficinas-peru', function () use ($app) {
	$array = array(	
		"oficina1" =>	
		array(
			"title"=>"Empaques y Productos de Pl&aacute;stico Per&uacute;",
			"telefono" => " +(51) 7118259",
			"direccion" => " Calle Dean Valdivia 148, Edificio Platinum Plaza 1, <br/> &nbsp; &nbsp;&nbsp;Piso 11, Ciudad de Lima, Per&uacute;")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});

$app->get('/contactenos-oficinas-republica-dominicana', function () use ($app) {
	$array = array(	
		"oficina1" =>	
		array(
			"title"=>"Empaques y Productos Rep&uacute;blica Dominicana",
			"telefono" => " +(809) 566-8278",
			"direccion" => " Calle Luis F. Thomen No. 110, <br/> &nbsp; &nbsp;&nbsp;Torre Ejecutiva Gapo, Suite 204, Evaristo Morales, <br/> &nbsp; &nbsp;&nbsp;Ciudad de Santo Domingo, <br/> &nbsp; &nbsp;&nbsp;Rep&uacute;blica de Dominicana")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array
	));
});


   


$app->run();

?>



