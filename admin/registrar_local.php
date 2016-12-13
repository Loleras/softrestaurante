<?php
	
	$nombre_local = $_GET['nombre_local'];
	$capmax_local = $_GET['capmax_local'];


	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "INSERT INTO local(nombrelocal,capacidad) VALUES ('$nombre_local','$capmax_local')";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	header('Location: web.php');
?>