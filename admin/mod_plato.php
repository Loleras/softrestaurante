<?php

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "SELECT * FROM menu";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	$codigo = $_GET['codigo'];
	$nombre = $_GET['nombre'];
	$descripcion = $_GET['descripcion'];
	$precio = $_GET['precio'];
	$tipos = $_GET['tipos'];

	$query = "UPDATE menu SET nombreplato = '$nombre', descripcion = '$descripcion', precio = '$precio' ,tipo_id = '$tipos' WHERE idplato = '$codigo'";

	$resultado = $mysqli->query($query); 

	header('Location: web.php');
?>