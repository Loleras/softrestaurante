<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menú</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
		function deslizar(){

			$(".letrero2").slideDown("slow");
			$(".menu2").slideDown(2000);
			$(".local2").slideDown(2000);
			$(".reservaciones2").slideDown(2000);
			$(".contactenos2").slideDown(2000);

		}

	</script>

</head>
<body onload="deslizar();">
	
	<div class="banner2">
		
		<img src="img/letrerooficial.png" alt="letrera" class="letrero2">
		<a href="index.php"><img src="img/logooriginal2.png" alt="logu" class="logomenu"></a>

		<!--OPCIONES EN LAS TABLAS-->

			<a href="Menu.php" class="menu2">Menú</a>
			<a href="Local.php" class="local2">Local</a>
			<a href="Reservaciones.php" class="reservaciones2">Reservaciones</a>
			<a href="Contactenos.php" class="contactenos2">Contáctenos</a>
			
	</div>

	<div class="platos">

		<div class="cabecera-platos">
			<a href="menu.php" class="peru"><img src="img/peru.png" alt="peru"></a>
			<a href="china.php" class="china"><img src="img/china.png" alt="peru"></a>
			<a href="italia.php" class="italia"><img src="img/italia.png" alt="peru"></a>
			<a href="egipto.php" class="egipto"><img src="img/egipto.png" alt="peru"></a>
			<a href="australia.php" class="australia"><img src="img/australia.png" alt="peru"></a>
		</div>
		<div class="body-platos">
			
			<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon1">
						

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon2">
						
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon3">
						
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon4">
						
						
					</div>
				</div>

			</div>

			<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon5">
						

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon6">
						
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon7">
						
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon8">
						
						
					</div>
				</div>

			</div>

		</div>
	</div>
</body>
</html>