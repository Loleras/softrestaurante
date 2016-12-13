<?php

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "SELECT * FROM local";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	$codigo = $_GET['codigo'];
	$nombrelocal = $_GET['nombrelocal'];
	$capacidadlocal = $_GET['capacidadlocal'];

	$query = "UPDATE local SET nombrelocal = '$nombrelocal', capacidad = '$capacidadlocal' WHERE idlocal = '$codigo'";

	$resultado = $mysqli->query($query); 

	header('Location: web.php');
?>