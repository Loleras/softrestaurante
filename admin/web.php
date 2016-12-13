<?php
 
  $mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
  $mysqlilocal = new mysqli('localhost', 'root', '', 'dbrestaurante');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página Web - Admin</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">

	function muestra_mesas(str) {
		    if (str == "") {
		        document.getElementById("muestramesas").innerHTML = "";
		        return;
		    } else { 
		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("muestramesas").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","web_mesas.php?q="+str,true);
		        xmlhttp.send();
		    }
		}
	</script>
</head>
<body>
	
	<!--********************MODAL / PLATO****************************-->

	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-sm">
	      <div class="modal-content">
	        <div class="modal-header">
	          
	          <h4 class="modal-title">REGISTRO</h4>
	        </div>
	        <div class="modal-body">
	        <center>
				<form action= "registrar.php" method="get" >
				<div class="input-group">
					<span class="input-group-addon">Nombre del Plato</span>
					<input type= "text" class="form-control" placeholder="ej. Arroz Chaufa" name="nombre">
					
				</div>
				<br>
				<div class="input-group">	
					<span class="input-group-addon">Descripción</span>
					<input type= "text" class="form-control" placeholder="ej. Plato hecho a a base de Pollo" name="descripcion">
					
				</div>
				<br>
				<div class="input-group">
		
					<span class="input-group-addon">Precio</span>
					<input type= "number" class="form-control" placeholder="ej. 15.00" name="precio">
					
				</div>
				<br>
				<div class="input-group">
		
					<span class="input-group-addon">Tipo</span>
					<select name="tipos" class="selectpicker">
					        	<option value="0">Eliga:</option>
					        	<?php
															
					          		$query = $mysqli -> query ("SELECT * FROM tipocomida");
																
					          		while ($valores = mysqli_fetch_array($query)) {
																	
					            	echo '<option value="'.$valores[idtipo].'">'.$valores[descriptipo].'</option>';
																		
					          		}
					        	?>
					</select>
					
				</div>
				<br>
				<br>
				<p>
					<input type="submit" class="btn btn-danger" value="Registrar Plato">
				</p>

				</form>
			</center>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        </div>
	      </div>
	    </div>
	  </div>
	
	 <!--********************MODAL / TIPO****************************-->

		<div class="modal fade" id="tipomodal" role="dialog">
		    <div class="modal-dialog modal-sm">
		      <div class="modal-content">
		        <div class="modal-header">
		          
		          <h4 class="modal-title">REGISTRO</h4>
		        </div>
		        <div class="modal-body">
		        <center>
					<form action= "registrar_tipo.php" method="get" >
					<div class="input-group">
						<span class="input-group-addon">Tipo de Alimento</span>
						<input type= "text" class="form-control" placeholder="ej. Cocteles" name="tipo_comida">
						
					</div>
					<br>
					<br>
					<p>
						<input type="submit" class="btn btn-danger" value="Registrar Tipo">
					</p>

					</form>
				</center>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		        </div>
		      </div>
		    </div>
		  </div>

	 <!--********************MODAL / LOCAL****************************-->

	<div class="modal fade" id="localmodal" role="dialog">
	    <div class="modal-dialog modal-sm">
	      <div class="modal-content">
	        <div class="modal-header">
	          
	          <h4 class="modal-title">REGISTRO</h4>
	        </div>
	        <div class="modal-body">
	        <center>
				<form action= "registrar_local.php" method="get" >
				<div class="input-group">
					<span class="input-group-addon">Ubicación del local</span>
					<input type= "text" class="form-control" placeholder="ej. San Agustin #234" name="nombre_local">
					
				</div>
				<br>
				<div class="input-group">	
					<span class="input-group-addon">Capacidad Máxima</span>
					<input type= "number" class="form-control" placeholder="ej. 350" name="capmax_local">
					
				</div>
				<br>
				<br>
				<p>
					<input type="submit" class="btn btn-danger" value="Registrar Local">
				</p>

				</form>
			</center>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        </div>
	      </div>
	    </div>
	  </div>

	<!--********************MODAL / MESA****************************-->

	<div class="modal fade" id="mesamodal" role="dialog">
	    <div class="modal-dialog modal-sm">
	      <div class="modal-content">
	        <div class="modal-header">
	          
	          <h4 class="modal-title">REGISTRO</h4>
	        </div>
	        <div class="modal-body">
	        <center>
				<form action= "registrar_mesa.php" method="get" >
				<div class="input-group">
					<span class="input-group-addon">Nombre de la Mesa</span>
					<input type= "text" class="form-control" placeholder="ej. B3" name="nombre_mesa">
					
				</div>
				<br>
				<div class="input-group">	
					<span class="input-group-addon">Local</span>
					<select name="local_mesa" class="selectpicker">
					        	<option value="0">Eliga:</option>
					        	<?php
															
					          		$query = $mysqli -> query ("SELECT * FROM local");
																
					          		while ($valores = mysqli_fetch_array($query)) {
																	
					            	echo '<option value="'.$valores[idlocal].'">'.$valores[nombrelocal].'</option>';
																		
					          		}
					        	?>
					</select>
					
				</div>
				<br>
				<br>
				<p>
					<input type="submit" class="btn btn-danger" value="Registrar Mesa">
				</p>

				</form>
			</center>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	        </div>
	      </div>
	    </div>
	  </div>

	<!--BARRA DE NAVEGACIÓN-->
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" >Administrador</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="active"><a href="web.php">Página Web</a></li>
	        <li><a href="restaurante.php">Restaurante</a></li>
	        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!--****************************************************************************-->

	<div class="carta">
		
		<h2>Menú (Carta)</h2><br><br>

		<?php


			$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
			if($mysqli->connect_errno){

				die("Error en connect");
			}

			$sql = "SELECT * FROM menu";
			if(!$result = $mysqli->query($sql)){
				die("Error en consulta");
			}
			
			echo "<table class='table' style='color:#000; text-align:center; '>";
		    echo "<tr><th style='text-align: center'>Id</th><th style='text-align: center'>Nombre de Plato</th><th style='text-align: center'>Descripción</th><th style='text-align: center'>Precio</th><th style='text-align: center'>Modificar</th><th style='text-align: center'>Eliminar</th></tr>";
		    while ($producto = $result->fetch_assoc()){

		        echo "<tr><td>";
		        echo $producto['idplato'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['nombreplato'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['descripcion'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo "$. ".$producto['precio'] . ".00 ";
		        echo "</td>";
		        echo "<td>";
				echo "<a href='modificar.php?codigo=".$producto['idplato']."'><span align='center' class='glyphicon glyphicon-edit'></span></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='eliminar.php?codigo=".$producto['idplato']."'><span class='glyphicon glyphicon-trash'></span></a>";
				echo "</td></tr>";
		    }
		    echo "</table>";
			
		?>
		
		<div class="form-group" align="center">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Registrar Nuevo Plato</button>
		</div>
	</div>
	
	<div class="tipo_comida">
		
		<h2>Tipos de Alimentos</h2>
		<br><br>
		<?php


			$mysqlitipo = new mysqli('localhost', 'root', '', 'dbrestaurante');
			if($mysqlitipo->connect_errno){

				die("Error en connect");
			}

			$sqltipo = "SELECT * FROM tipocomida";
			if(!$resulttipo = $mysqlitipo->query($sqltipo)){
				die("Error en consulta");
			}
			
			echo "<table class='table' style='color:#000; text-align:center; '>";
		    echo "<tr><th style='text-align: center'>Id</th><th style='text-align: center'>Descripción del Tipo</th><th style='text-align: center'>Modificar</th><th style='text-align: center'>Eliminar</th></tr>";
		    while ($tipo = $resulttipo->fetch_assoc()){

		        echo "<tr><td>";
		        echo $tipo['idtipo'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $tipo['descriptipo'] . " ";
		        echo "</td>";
		        echo "<td>";
				echo "<a href='modificar_tipo.php?codigo=".$tipo['idtipo']."'><span align='center' class='glyphicon glyphicon-edit'></span></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='eliminar_tipo.php?codigo=".$tipo['idtipo']."'><span class='glyphicon glyphicon-trash'></span></a>";
				echo "</td></tr>";
		    }
		    echo "</table>";
			
		?>
		<div class="form-group" align="center">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tipomodal">Registrar Nuevo Tipo</button>
		</div>
	</div>

	<div class="locales">
		
		<h2>Locales disponibles</h2><br><br>

		<?php


			$mysqlilocal = new mysqli('localhost', 'root', '', 'dbrestaurante');
			if($mysqlilocal->connect_errno){

				die("Error en connect");
			}

			$sqllocal = "SELECT * FROM local";
			if(!$resultlocal = $mysqlilocal->query($sqllocal)){
				die("Error en consulta");
			}
			
			echo "<table class='table' style='color:#000; text-align:center; '>";
		    echo "<tr><th style='text-align: center'>Id</th><th style='text-align: center'>Nombre del local</th><th style='text-align: center'>Capacidad Máxima</th><th style='text-align: center'>Modificar</th><th style='text-align: center'>Eliminar</th></tr>";
		    while ($local = $resultlocal->fetch_assoc()){

		        echo "<tr><td>";
		        echo $local['idlocal'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $local['nombrelocal'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $local['capacidad'] . " ";
		        echo "</td>";
		        echo "<td>";
				echo "<a href='modificar_local.php?codigo=".$local['idlocal']."'><span align='center' class='glyphicon glyphicon-edit'></span></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='eliminar_local.php?codigo=".$local['idlocal']."'><span class='glyphicon glyphicon-trash'></span></a>";
				echo "</td></tr>";
		    }
		    echo "</table>";
			
		?>
		<div class="form-group" align="center">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#localmodal">Registrar Nuevo Local</button>
		</div>

	</div>
	
	<div class="mesas">
		
		<h2>Mesas / local</h2>
		<br><br>
		<?php


			$mysqlimesa = new mysqli('localhost', 'root', '', 'dbrestaurante');
			if($mysqlimesa->connect_errno){

				die("Error en connect");
			}

			$sqlmesa = "SELECT * FROM mesas";
			if(!$resultmesa = $mysqlimesa->query($sqlmesa)){
				die("Error en consulta");
			}
			
			echo "<table class='table' style='color:#000; text-align:center; '>";
		    echo "<tr><th style='text-align: center'>Id</th><th style='text-align: center'>Nombre de la Mesa</th><th style='text-align: center'>Local</th><th style='text-align: center'>Modificar</th><th style='text-align: center'>Eliminar</th></tr>";
		    while ($mesa = $resultmesa->fetch_assoc()){

		        echo "<tr><td>";
		        echo $mesa['idmesa'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $mesa['nombre_mesa'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $mesa['local_id'] . " ";
		        echo "</td>";
		        echo "<td>";
				echo "<a href='modificar_mesas.php?codigo=".$mesa['idmesa']."'><span align='center' class='glyphicon glyphicon-edit'></span></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='eliminar_mesas.php?codigo=".$mesa['idmesa']."'><span class='glyphicon glyphicon-trash'></span></a>";
				echo "</td></tr>";
		    }
		    echo "</table>";
			
		?>
		<div class="form-group" align="center">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#mesamodal">Registrar Nueva Mesa</button>
		</div>
	</div>

	<div class="ofertas">
		
		<h2>Ofertas</h2>
	</div>

</body>
</html>