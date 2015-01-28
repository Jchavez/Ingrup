<?php
/*LOCAL*/
function connect_db() {
	$server = 'localhost'; // this may be an ip address instead
	$user = 'root';
	$pass = '';
	$database = 'backendingrup';
	$connection = new mysqli($server, $user, $pass, $database);

	return $connection;
}

/*REMOTE*/
/*
function connect_db() {
	$server = 'localhost'; // this may be an ip address instead
	$user = 'root_ingrup';
	$pass = 'ingrup*1';
	$database = 'ingrup08012015';
	$connection = new mysqli($server, $user, $pass, $database);

	return $connection;
}

*/