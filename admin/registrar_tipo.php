<?php
	
	$tipo_comida = $_GET['tipo_comida'];


	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "INSERT INTO tipocomida(descriptipo) VALUES ('$tipo_comida')";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	header('Location: web.php');
?>