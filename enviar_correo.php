<?php

	if(isset($_GET['first_name']) && !empty($_GET['first_name']) &&
	   isset($_GET['last_name']) && !empty($_GET['last_name']) &&
	   isset($_GET['email']) && !empty($_GET['email']) &&
	   isset($_GET['comments']) && !empty($_GET['comments'])){

		$destino = "ernestogatoale@gmail.com";
		$usuario = $_GET['email'];
		$mensaje = $_GET['comments'];
		$nombre_usu = $_GET['first_name'];
		$apellido_usu = $_GET['last_name'];

		$contenido = "Nombre: ". $nombre_usu. "\nApellido: ". $apellido_usu. "\nCorreo: ".$usuario. "\nMensaje: ".$mensaje;

		mail($destino, "Contacto", $contenido);
		header('Location: contactenos.php');
	}else{

		echo "Problema al enviar el mensaje!";
	}

?>