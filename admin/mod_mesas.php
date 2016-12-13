<?php

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "SELECT * FROM mesas";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	$codigo = $_GET['codigo'];
	$nombremesa = $_GET['nombremesa'];
	$localmesa = $_GET['local_mesa'];

	$query = "UPDATE mesas SET nombre_mesa = '$nombremesa', local_id = '$localmesa' WHERE idmesa = '$codigo'";

	$resultado = $mysqli->query($query); 

	header('Location: web.php');
?>