<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once("inc/header.php");

require_once ('lib/Slim/Slim.php');
\Slim\Slim::registerAutoloader();

require_once 'lib/mysql.php';

$app = new \Slim\Slim(
	array(
    'templates.path' => './templates'
	)
); 

$app->hook('slim.before', function () use ($app) {
    $app->view()->appendData(array('baseUrl' => '/ingrup/'));
});

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

$app->get('/catalogo-de-productos', function () use ($app) {
	$app->render('catalogo-de-productos.php', array(
			'page_title' => "Catalogo de Productos | INGRUP"
		)
	);
});

$app->get('/empleo', function () use ($app) {
	$app->render('empleo.php', array(
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
		'data' => $array,
		'nombreDelProducto'=>''
	));
});

$app->get('/contactenos/interes/:producto', function ($producto) use ($app) {
	$array = array(
		"planta" =>	
			array(
				"title"=>"",
				"telefono" => "+(502) 2326-5700",
				"direccion" => "Av. Petapa y 56 Calle, zona 12, Ciudad de Guatemala, Guatemala")
		);
	$app->render('contactenos.php', array(
		'page_title' => "Contactenos | INGRUP",
		'data' => $array,
		'productName'=>$producto
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
		'data' => $array,
		'productName'=>''
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
		'data' => $array,
		'productName'=>''
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
		'data' => $array,
		'productName'=>''
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
		'data' => $array,
		'productName'=>''
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
		'data' => $array,
		'productName'=>''
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
		'data' => $array,
		'productName'=>''
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
		'data' => $array,
		'productName'=>''
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
		'data' => $array,
		'productName'=>''
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
		'data' => $array,
		'productName'=>''
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
		'data' => $array,
		'productName'=>''
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
		'data' => $array,
		'productName'=>''
	));
});

/*********************CATALOGO DE PRODUCTOS******************************/

$app->get('/familia-productos', function () use ($app) {
	$db = connect_db();
	$result = $db->query( 'SELECT id, name FROM family_products ORDER BY `family_products`.`name` ASC;' );
	while ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
		$data[] = $row;
	}	

	$app->render('familia-productos.php', array(
			'page_title' => "Familia de Productos | INGRUP",
			'data' => $data
		)
	);
});

$app->get('/categoria-productos/:id', function ($id) use ($app) {
	$db = connect_db();
	$textQuery="select id, name, main_image from category_products where family_products_id=".$id;
	$result = $db->query( $textQuery );
	while ( $row = $result->fetch_array() ) {
		$data[] = $row;
	}	

	$app->render('categoria-productos.php', array(
			'page_title' => "Categoria de Productos | INGRUP",
			'data' => $data
		)
	);
});



$app->get('/productos/:id', function ($id) use ($app) {
	$db = connect_db();
	$textQuery="select id, name, main_image from products where category_products_id=".$id;
	$result = $db->query( $textQuery );

	if($result->num_rows==0){
		//ENVIAR INFORMACION A PRODUCTOS
		$textQuery="select id, name, description, main_image from category_products where category_products.id=".$id;
		$result = $db->query( $textQuery );
		while ($row = $result->fetch_array()) {
			$data[] = $row;
		}	
		$app->render('producto.php', array(
			'page_title' => "Productos | INGRUP",
			'data' => $data,
			'folderImages'=>'category_products',
			'table'=>'category_products'
		));
		//die();
	}else{
		while ($row = $result->fetch_array()) {
			$data[] = $row;
		}	
		$app->render('productos.php', array(
			'page_title' => "Productos | INGRUP",
			'data' => $data/*,
			'linkCategory'=>$req*/
		));
	}
	
	
});

$app->get('/producto/:id', function ($id) use ($app) {
	$db = connect_db();
	$textQuery="select id, name, description, main_image from products where id=".$id;
	$result = $db->query( $textQuery );

		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$data[] = $row;
		}	
		$app->render('producto.php', array(
			'page_title' => "Producto | INGRUP",
			'data' => $data,
			'folderImages'=>'products'
		));

});

$app->get('/industrias', function () use ($app) {
	$db = connect_db();
	$result = $db->query( 'SELECT * FROM industries ORDER BY `industries`.`name` ASC;' );
	while ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
		$data[] = $row;
	}	

	$app->render('industrias.php', array(
			'page_title' => "Industrias | INGRUP",
			'data' => $data
		)
	);
});


$app->get('/familia-industrias/:id', function ($id) use ($app) {
	$db = connect_db();
	$textQuery="SELECT * FROM family_industries  where industries_id=".$id;
	$result = $db->query($textQuery);
	while ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
		$data[] = $row;
	}	

	$app->render('familia-industrias.php', array(
			'page_title' => "Familia Industrias | INGRUP",
			'data' => $data
		)
	);
});

$app->get('/categoria-industrias/:id', function ($id) use ($app) {
	$db = connect_db();
	$textQuery="select * from category_industries where family_industries_id=".$id;
	$result = $db->query( $textQuery );
	while ( $row = $result->fetch_array() ) {
		$data[] = $row;
	}	

	$app->render('categoria-industrias.php', array(
			'page_title' => "Categoria de Productos | INGRUP",
			'data' => $data
		)
	);
});

$app->get('/productos-industrias/:id', function ($id) use ($app) {
	$db = connect_db();
	$textQuery="select * from products where category_industries_id=".$id;
	$result = $db->query( $textQuery );

	if($result->num_rows==0){
		//ENVIAR INFORMACION A PRODUCTOS
		$textQuery="select * from category_industries where category_industries.id=".$id;
		$result = $db->query( $textQuery );
		while ($row = $result->fetch_array()) {
			$data[] = $row;
		}	
		$app->render('producto.php', array(
			'page_title' => "Productos | INGRUP",
			'data' => $data,
			'folderImages'=>'category_industries'
		));
		//die();
	}else{
		while ($row = $result->fetch_array()) {
			$data[] = $row;
		}	
		$app->render('productos.php', array(
			'page_title' => "Productos | INGRUP",
			'data' => $data/*,
			'linkCategory'=>$req*/
		));
	}
});

$app->get('/noticias', function () use ($app) {
	$db = connect_db();
	$result = $db->query( 'SELECT * FROM news ORDER BY `news`.`date_publication` DESC;' );
	while ( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
		$data[] = $row;
	}	

	$app->render('noticias.php', array(
			'page_title' => "Noticias | INGRUP",
			'data' => $data
		)
	);
});

$app->get('/noticia/:id', function ($id) use ($app) {
	$db = connect_db();
	$textQuery="select * from news where id=".$id;
	$result = $db->query( $textQuery );

		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$data[] = $row;
		}	
		$app->render('noticia.php', array(
			'page_title' => "Noticia | INGRUP",
			'data' => $data
		));

});

$app->get('/ficha-tecnica/:id', function ($id) use ($app) {
	$db = connect_db();
	$textQuery="select * from products where id=".$id;
	$result = $db->query( $textQuery );

		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			$data[] = $row;
		}	
		$app->render('ficha-tecnica.php', array(
			'page_title' => "Ficha Técnica | INGRUP",
			'data' => $data,
			'folderImages'=>'products/'
		));

});
   


$app->run();

require("inc/footer.php");
?>



