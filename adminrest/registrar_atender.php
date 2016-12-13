<?php
	
	session_start();
	 if (!isset($_SESSION["user"])) {
	  		header("location:login.php");
	 }

	date_default_timezone_set("America/Lima");

	$mozo = $_GET['mozo'];
	$local = $_GET['local'];
	$mesa = $_GET['mesa'];
	$fecha = date("Y/m/d");

	$con = mysqli_connect('localhost','root','','dbrestaurante');
	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');

	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql2 = "SELECT idusuarios FROM usuarios WHERE user = '".$_SESSION['user']."'";

	$resultado = mysqli_query($con,$sql2);
	while ($producto = $resultado->fetch_assoc()){

		$resp = $producto['idusuarios'];
	}

	$sql = "INSERT INTO atender(atencion_usu, atencion_mozo, atencion_local, atencion_mesa, atencion_fecha) VALUES ('$resp','$mozo','$local', '$mesa', '$fecha')";
	
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	mysqli_close($con);
	header('Location: ordenarpedido.php');
?>