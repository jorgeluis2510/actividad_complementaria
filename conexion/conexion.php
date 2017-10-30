<?php

	$con = 'mysql:dbname=pato;host=localhost';
	$user = 'pato';
	$password = 'patoocampo25';

	try {
		$pdo = new PDO($con,$user,$password);
	} catch (Exception $e) {
		echo 'Error al conectarnos' .$e->getMessage();
	}

 ?>
