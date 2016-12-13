<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}
	$con = mysqli_connect('localhost','root','','dbrestaurante');
	$codigo  = $_GET['codigo'];
	$sql = "SELECT cantidad FROM pedidos WHERE id_pedido = '".$codigo."'";
	$resultado = mysqli_query($con,$sql);

	while ($producto = $resultado->fetch_assoc()){

		$resp = $producto['cantidad'];
	}

	if($resp > 1){

		$sql1="UPDATE pedidos SET cantidad = cantidad - 1 WHERE id_pedido = '".$codigo."'";
		$resultado = $mysqli->query($sql1);
	}
	else{

		echo '<script language="javascript">alert("La cantidad es insuficiente");</script>'; 
	}
	
	header('Location: ordenarpedido.php');
?>