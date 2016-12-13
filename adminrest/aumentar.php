<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$codigo  = $_GET['codigo'];
	$sql="UPDATE pedidos SET cantidad = cantidad + 1 WHERE id_pedido = '".$codigo."'";

	$resultado = $mysqli->query($sql);
	header('Location: ordenarpedido.php');
?>