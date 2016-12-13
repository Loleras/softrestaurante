<?php
	
	$nombre_mesa = $_GET['nombre_mesa'];
	$local_mesa = $_GET['local_mesa'];


	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "INSERT INTO mesas(nombre_mesa,local_id) VALUES ('$nombre_mesa','$local_mesa')";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	header('Location: web.php');
?>