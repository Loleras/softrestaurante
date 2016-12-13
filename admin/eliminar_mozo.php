<?php

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "SELECT * FROM mozos";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	$codigo  = $_GET['codigo'];
	$query = "DELETE  FROM  mozos WHERE id_mozo = '$codigo'";

	$resultado = $mysqli->query($query);

	header('Location: restaurante.php');
?>