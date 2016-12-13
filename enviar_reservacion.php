<?php
	
	$resnombre = $_GET['resnombres'];
	$resemail = $_GET['resemail'];
	$resdni = $_GET['resdni'];
	$rescelular = $_GET['rescelular'];
	$resfecha = $_GET['resfecha'];
	$reshora = $_GET['reshora'];
	$reslocal = $_GET['reslocal'];
	$resmesa = $_GET['resmesa'];
	$respago = $_GET['optradio'];
	$restarjeta = $_GET['restarjeta'];
	$resexpiracion = $_GET['resexpiracion'];
	$resseguridad = $_GET['resseguridad'];

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql2="UPDATE mesas SET estado_mesa = 1 WHERE idmesa = '$resmesa'";

	$resultado = $mysqli->query($sql2);


	$sql = "INSERT INTO reservaciones(reser_nombres,reser_email,reser_dni,reser_celular,reser_fecha, reser_hora, reser_local, reser_mesa, reser_pago, reser_numtarjeta, reser_expiracion, reser_seguridad) VALUES ('$resnombre','$resemail','$resdni','$rescelular', '$resfecha', '$reshora', '$reslocal', '$resmesa', '$respago', '$restarjeta', '$resexpiracion', '$resseguridad')";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	header('Location: reservaciones.php');
?>