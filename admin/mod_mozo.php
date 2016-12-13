<?php

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "SELECT * FROM mozos";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	$codigo = $_GET['codigo'];
	$nombres = $_GET['nombres'];
	$apellidos = $_GET['apellidos'];
	$apodo = $_GET['apodo'];
	$puntaje = $_GET['puntaje'];

	$query = "UPDATE mozos SET nombremozo = '$nombres', apellidomozo = '$apellidos', apodomozo = '$apodo', puntaje = '$puntaje' WHERE id_mozo = '$codigo'";

	$resultado = $mysqli->query($query); 

	header('Location: restaurante.php');
?>