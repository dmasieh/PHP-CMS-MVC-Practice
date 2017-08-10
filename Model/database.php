<?php
	$dsn = 'mysql:host=localhost;dbname=doug_glo_2';
	$username = 'root';
	$password = '';

	try {
		$db = new PDO($dsn,$username,$password);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		include('../error/database_error.php');
		exit();
	}
?>
