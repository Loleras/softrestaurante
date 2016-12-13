<?php
 
 	include_once "conexao.php";

  $mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
  session_start();
  if (!isset($_SESSION["user"])) {
  		header("location:login.php");
  }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ordenar Pedido</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower|Didact+Gothic|Alfa+Slab+One|Patua+One" rel="stylesheet">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="../css/adminrest.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
	function carta(str) {
		    if (str == "") {
		        document.getElementById("cartapedido").innerHTML = mostrar_img();
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
		                document.getElementById("cartapedido").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","getcartapedido.php?q="+str,true);
		        xmlhttp.send();
		    }
		}

	function pedidos(str) {
		    if (str == "") {
		        document.getElementById("listpedido").innerHTML = mostrar_img();
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
		                document.getElementById("listpedido").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","getpedidos.php?q="+str,true);
		        xmlhttp.send();
		    }
		}

	function mesas_local(str) {
		    if (str == "") {
		        document.getElementById("mesita").innerHTML = "";
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
		                document.getElementById("mesita").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","mesas_disp.php?q="+str,true);
		        xmlhttp.send();
		    }
		}

	function votar(str) {
		    if (str == "") {
		        document.getElementById("votacion").innerHTML = "";
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
		                document.getElementById("votacion").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","single.php?q="+str,true);
		        xmlhttp.send();
		    }
		}
	</script>

</head>
<body>


<!--********************MODAL / TIPO****************************-->

		<div class="modal fade" id="tipomodal" role="dialog">
		    <div class="modal-dialog modal-sm">
		      <div class="modal-content">
		        <div class="modal-header">
		          
		          <h4 class="modal-title">PEDIDO</h4>
		        </div>
		        <div class="modal-body">
		        <center>
					<form action= "registrar_atender.php" method="get" >
					<div class="input-group">
						<span class="input-group-addon">Mozo</span>
						<select name="mozo" class="selectpicker">
					        	<option value="0">Eliga:</option>
						        	<?php
																
						          		$query = $mysqli -> query ("SELECT * FROM mozos");
																	
						          		while ($valores = mysqli_fetch_array($query)) {
																		
						            	echo '<option value="'.$valores[id_mozo].'">'.$valores[nombremozo].'</option>';
																			
						          		}
						        	?>
						</select>
						</div>
						<br>
					<div class="input-group">
						<span class="input-group-addon">Local</span>
						<select name="local" class="selectpicker" onchange="mesas_local(this.value)">
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
					
						<span class="input-group-addon">Mesa</span>
						<br>
						<div id="mesita">
							
							<p>Aún no seleciono</p>
						</div>

					
					<br>
					<br>
					<p>
						<input type="submit" class="btn btn-danger" value="Listo">
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

<!--********************MODAL CALIFICACION MOZO****************************-->

		<div class="modal fade" id="calificamozo" role="dialog">
		    <div class="modal-dialog modal-sm">
		      <div class="modal-content">
		        <div class="modal-header">
		          
		          <h4 class="modal-title">CALIFICACIÓN</h4>
		        </div>
		        <div class="modal-body">
		        <center>
				
					<div class="input-group">
						<span class="input-group-addon">Mozo</span>
						<select name="mozo" onchange="votar(this.value)">
					        	<option value="0">Eliga al mozo:</option>
						        	<?php
																
						          		$query2 = $pdo->prepare("SELECT * FROM `mozos`");
										$query2->execute();
										while($row = $query2->fetchObject()){
																		
						            	echo '<option value="'.$row->id_mozo.'">'.$row->nombremozo.'</option>';
																			
						          		}
						        	?>
						</select>
					</div>
					<div id="votacion">
						<br>
						<p>Aún no seleciono</p>
					</div>
					
					<br>
				</center>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		        </div>
		      </div>
		    </div>
		  </div>


<div class="portada2">

	<!--BARRA DE NAVEGACIÓN-->
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <!--<img src="../img/logooriginal2.png" alt="logo" class="logoti">--><a class="navbar-brand">El Griux</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><?php echo '<a>Bienvenido usuario: '.$_SESSION["user"].'</a>'; ?></a></li>
	        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Cerrar Sesión</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>


	<div class="pedido">
			
			<h1>Pedido Online</h1>
			<hr>

			<div class="pedidotipo">

				<h2 class="unic">Carta:</h2>
				
				<div class="buscapedido">
					<form class="opciones">
						<select name="platos" onchange="carta(this.value)" >
			
						  	<option value="">Eliga:</option>
						  	<?php
																	
							    $query = $mysqli -> query ("SELECT * FROM tipocomida");
																		
							    	while ($valores = mysqli_fetch_array($query)) {
																			
							    	echo '<option value="'.$valores[idtipo].'">'.$valores[descriptipo].'</option>';
																				
							    }
							?>
						</select>
					</form>
				</div>

				<div id="cartapedido">
					
					

				</div>

			</div>

			<div class="pedidoelegido">
				
				<h2 class="unic">Pedido:</h2>
					<br><br>
						
						<div id="listpedido">
							
							<?php


								$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
								if($mysqli->connect_errno){

									die("Error en connect");
								}

								date_default_timezone_set("America/Lima");
								$sql2 = "SELECT idusuarios FROM usuarios WHERE user = '".$_SESSION['user']."'";
								$con = mysqli_connect('localhost','root','','dbrestaurante');
								$resultado = mysqli_query($con,$sql2);
								while ($producto = $resultado->fetch_assoc()){

									$id_use = $producto['idusuarios'];
								}

								$fecha_actual = date("Y/m/d");

								$sql = "SELECT * FROM pedidos WHERE id_usuario = '".$id_use."' AND fecha_pedido = '".$fecha_actual."'";
								if(!$result = $mysqli->query($sql)){
									die("Error en consulta");
								}
								
								$cont=1;
								$pagar=0;
								echo "<table class='table' style='color:#fff; text-align:center; '>";
							    echo "<tr><th style='text-align: center'>Id</th><th style='text-align: center'>Nombre de Plato</th><th style='text-align: center'>Descripción</th><th style='text-align: center'>Precio</th><th style='text-align: center'>Cantidad</th><th style='text-align: center'>Importe</th><th style='text-align: center'>Acciones</th></tr>";

							    while ($producto = $result->fetch_assoc()){

							        $sql3 = "SELECT * FROM menu WHERE idplato = '".$producto['id_plato']."'";
							        if(!$resultado3 = $mysqli->query($sql3)){
											die("Error en consulta");
										}

										while($producto1 = $resultado3->fetch_assoc()){

									        echo "<tr><td>";
									        echo $producto['id_pedido']. " ";
									        echo "</td>";
									        echo "<td>";
									        echo $producto1['nombreplato'] . " ";
									        echo "</td>";
									        echo "<td>";
									        echo $producto1['descripcion'] . " ";
									        echo "</td>";
									        echo "<td>";
									        echo "$ ".$producto1['precio'] . " ";
									        echo "</td>";
									        echo "<td>";
									        echo $producto['cantidad'] . " ";
									        echo "</td>";
									        echo "<td>";
									        echo "$ ".$producto['cantidad']*$producto1['precio'] . " ";
									        echo "</td>";
									        echo "<td>";
											echo "<a href='aumentar.php?codigo=".$producto['id_pedido']."'><span align='center' class='glyphicon glyphicon-plus'></span></a>";
											echo "<a href='disminuir.php?codigo=".$producto['id_pedido']."'><span align='center' class='glyphicon glyphicon-minus'></span></a>";
											echo "<a href='eliminar_pedido.php?codigo=".$producto['id_pedido']."'><span class='glyphicon glyphicon-trash'></span></a>";
											echo "</td></tr>";
											$pagar = $pagar + ($producto1['precio']*$producto['cantidad']);
										}
									$cont++;
							    }
							    echo "</table>";
								
								echo "<h2>TOTAL: $ ".$pagar.".00</h2>";
								mysqli_close($con);	
							?>
						</div>
			</div>

			<button type="button" data-toggle="modal" data-target="#tipomodal" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-ok"> </span>  Enviar Pedido</button>
			<br><br><br>

			<a href="#" data-toggle="modal" data-target="#calificamozo"><h3><i class="material-icons tam">star_rate</i>Califica al Mozo<i class="material-icons tam">star_rate</i></h3></a>
			<br><br>
	</div>
</div>
</body>
</html>