
<?php

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	$mysqli2 = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "SELECT * FROM tipocomida";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	$codigo  = $_GET['codigo'];
	$query = "SELECT descriptipo FROM tipocomida WHERE idtipo = '$codigo'";

	$resultado = $mysqli->query($query);

	$row = $resultado -> fetch_assoc();

	?>


<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<center>
		<div class="cajon">
			<center>
	  

				<form action= "mod_tipo.php" method="get" >
				<div class="input-group">
					<input type="hidden" name="codigo" value="<?php echo $codigo; ?>"></input>
					<span class="input-group-addon">Tipo de Alimento</span>
					<input type= " text" class="form-control" value="<?php echo $row['descriptipo']?>" name="tipo_alimento">
					
				</div>
				<br>
				<br>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Modificar Tipo">
	  			</div>

				</form>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  			</center>
  		</div>
  	</center>
</body>
</html>