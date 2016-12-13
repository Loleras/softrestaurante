<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
		
		function deslizar(){

			$(".letrero").slideDown("slow");
			$(".menu").slideDown(2000);
			$(".local").slideDown(2000);
			$(".reservaciones").slideDown(2000);
			$(".contactenos").slideDown(2000);

		}

	</script>
</head>
<body onload="deslizar();">
<div class="banner">
		
		<img src="img/letrerooficial.png" alt="letrera" class="letrero">
		<a><img src="img/logooriginal2.png" alt="logu" class="logo"></a>

		<!--OPCIONES EN LAS TABLAS-->

			<a href="menu.php" class="menu">Menú</a>
			<a href="local.php" class="local">Local</a>
			<a href="reservaciones.php" class="reservaciones">Reservaciones</a>
			<a href="contactenos.php" class="contactenos">Contáctenos</a>
			
	</div>

</body>
</html>