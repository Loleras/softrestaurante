
<?php

	$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
	$mysqli2 = new mysqli('localhost', 'root', '', 'dbrestaurante');
	if($mysqli->connect_errno){

		die("Error en connect");
	}

	$sql = "SELECT * FROM menu";
	if(!$result = $mysqli->query($sql)){
		die("Error en consulta");
	}

	$codigo  = $_GET['codigo'];
	$query = "SELECT nombreplato, descripcion, precio, tipo_id FROM menu WHERE idplato = '$codigo'";

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
	  

				<form action= "mod_plato.php" method="get" >
				<div class="input-group">
					<input type="hidden" name="codigo" value="<?php echo $codigo; ?>"></input>
					<span class="input-group-addon">Nombre del Plato</span>
					<input type= " text" class="form-control" value="<?php echo $row['nombreplato']?>" name="nombre">
					
				</div>
				<br>
				<div class="input-group">	
					<span class="input-group-addon">Descripción</span>
					<input type= " text" class="form-control" value="<?php echo $row['descripcion']?>" name="descripcion">
					
				</div>
				<br>
				<div class="input-group">	
					<span class="input-group-addon">Precio</span>
					<input type= " text" class="form-control" value="<?php echo $row['precio']?>" name="precio"> 
					
				</div>
				<br>
				<div class="input-group">
		
					<span class="input-group-addon">Tipo</span>
					<select name="tipos" class="selectpicker">
					     <option value="<?php echo $row['tipo_id']?>" ><?php echo $row['tipo_id']?></option>
					        	<?php
															
					          		$query1 = $mysqli2 -> query ("SELECT * FROM tipocomida");
																
					          		while ($valores1 = mysqli_fetch_array($query1)) {
																	
					            		echo '<option value="'.$valores1[idtipo].'">'.$valores1[descriptipo].'</option>';
																		
					          		}
					        	?>
					</select>
					
				</div>
				<br>
				<br>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Modificar">
	  			</div>

				</form>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  			</center>
  		</div>
  	</center>
</body>
</html>