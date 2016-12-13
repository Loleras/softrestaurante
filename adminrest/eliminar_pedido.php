<?php

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}
	
	$sql = "SELECT * FROM pedidos";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	$codigo  = $_GET['codigo'];
	$query = "DELETE  FROM  pedidos WHERE id_pedido = '$codigo'";

	$resultado = $mysqli->query($query);

	header('Location: ordenarpedido.php');
?>