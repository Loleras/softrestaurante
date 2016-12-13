<?php

	session_start();
	 if (!isset($_SESSION["user"])) {
	  		header("location:login.php");
	 }

	date_default_timezone_set("America/Lima");
	$codigo  = $_GET['codigo'];
	$con = mysqli_connect('localhost','root','','dbrestaurante');

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql2 = "SELECT idusuarios FROM usuarios WHERE user = '".$_SESSION['user']."'";
	$sql3 = "SELECT precio FROM menu WHERE idplato = '".$codigo."'";
	$fecha = date("Y/m/d");
	$cant = 1;

	$resultado = mysqli_query($con,$sql2);

	while ($producto = $resultado->fetch_assoc()){

		$resp = $producto['idusuarios'];
	}

	$resultado3 = mysqli_query($con,$sql3);

	while ($producto3 = $resultado3->fetch_assoc()){

		$precio_plato = $producto3['precio'];
	}
	
	$sql = "INSERT INTO pedidos(id_usuario, id_plato, fecha_pedido, cantidad, precio_plato) VALUES ('$resp','$codigo','$fecha', '$cant', '$precio_plato')";
	if(!$result = $mysqli->query($sql)){
		
		die("Error en consulta");

	}

	mysqli_close($con);
	header('Location: ordenarpedido.php');

?>
