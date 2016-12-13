<?php
	
	$nombres = $_GET['nombres'];
	$apellidos = $_GET['apellidos'];
	$apodo = $_GET['apodo'];
	$puntaje = 100;

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "INSERT INTO mozos(nombremozo,apellidomozo,apodomozo,puntaje) VALUES ('$nombres','$apellidos','$apodo','$puntaje')";
	if(!$result = $mysqli->query($sql)){


		die("Error en consulta");
	}

	header('Location: restaurante.php');
?>