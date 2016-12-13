<?php
	
	$nombre = $_GET['nombre'];
	$descripcion = $_GET['descripcion'];
	$precio = $_GET['precio'];
	$tipos = $_GET['tipos'];

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "INSERT INTO menu(nombreplato,descripcion,precio,tipo_id) VALUES ('$nombre','$descripcion','$precio','$tipos')";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	header('Location: web.php');
?>