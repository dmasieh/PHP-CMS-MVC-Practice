<?php
	//Establishment of DB Connection
	//$dsn(DATA STORAGE NETWORK) = 'mysql:host="DATABASE SERVER";dbname="DATABASE NAME"';
	//$username = '"USER"';
	//$password = '"PASSWORD"';
	//*default for localhost/phpmyadmin is user:root, pass='', NOT SECURE

	$dsn = 'mysql:host=localhost;dbname=phpcms';
	$username = 'root';
	$password = '';

	//Try-Catch method for printing errors if DB Connection cannot be established
	try {
		$db = new PDO($dsn,$username,$password);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		include('../error/database_error.php');
		exit();
	}
?>
