<?php require("header.php");?>
<?php require("menu.php");?>
<?php 
	// Include Medoo (configured)
	require_once 'lib/medoo/medoo.min.php';

 	// Initialize
	$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'backendingrup',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	]);


	/*$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'ingrup08012015',
	'server' => 'localhost',
	'username' => 'root_ingrup',
	'password' => 'Ingrup*1',
	]);*/
	/*
	require("lib/redBean/rb.php");
	R::setup('mysql:host=localhost;dbname=backendingrup','root',''); 
	*/
	//for both mysql or mariaDB
?>
	
	<!--<img src="img/headerProductos.jpg" class="img-responsive" style="width:100%;">-->
	<!-- CONTENT -->
	<div id="wrapper_content">
	<div class="container">