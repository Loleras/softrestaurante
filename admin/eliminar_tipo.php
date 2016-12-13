<?php

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "SELECT * FROM tipocomida";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	$codigo  = $_GET['codigo'];
	$query = "DELETE  FROM  tipocomida WHERE idtipo = '$codigo'";

	$resultado = $mysqli->query($query);

	header('Location: web.php');
?>