<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página Web - Admin</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/admin.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="../js/chartJS/Chart.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">

	function muestra_pedido(str) {
		    if (str == "") {
		        document.getElementById("muestrapedido").innerHTML = "";
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
		                document.getElementById("muestrapedido").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","web_mesas.php?q="+str,true);
		        xmlhttp.send();
		    }
		}
	</script>
</head>
<body>
	
	<!--**************************** MODALES **************************-->
	
	<!--******************PROBANDO MODAL********************-->

	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" id="modalpedido" role="dialog">
	    <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">

	        <h4 class="modal-title" id="exampleModalLabel">Pedido</h4>
	      </div>
	      <div class="modal-body">
	        <div id="pedido_usuario">
	        	

	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	  </div>
		
	<!--****************************************************-->

	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-sm">
	      <div class="modal-content">
	        <div class="modal-header">
	          
	          <h4 class="modal-title">REGISTRO DE MOZOS</h4>
	        </div>
	        <div class="modal-body">
	        <center>
				<form action= "registrar_mozo.php" method="get" >
				<div class="input-group">
					<span class="input-group-addon">Nombres del Mozo</span>
					<input type= "text" class="form-control" placeholder="ej. Miguel Angel" name="nombres">
					
				</div>
				<br>
				<div class="input-group">	
					<span class="input-group-addon">Apellidos del Mozo</span>
					<input type= "text" class="form-control" placeholder="ej. Gutierrez Arenas" name="apellidos">
					
				</div>
				<br>
				<div class="input-group">
		
					<span class="input-group-addon">Apodo del Mozo</span>
					<input type= "text" class="form-control" placeholder="ej. Requeson" name="apodo">
					
				</div>
				<br>
				<br>
				<p>
					<input type="submit" class="btn btn-danger" value="Registrar Mozo">
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
	<nav class="navbar navbar-default">
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
	        <li><a href="web.php">Página Web</a></li>
	        <li class="active"><a href="restaurante.php">Restaurante</a></li>
	        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!--****************************************************************************-->

	<div class="carta">
		
		<h2>Lista de Mozos</h2><br><br>

		<?php


			$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
			if($mysqli->connect_errno){

				die("Error en connect");
			}

			$sql = "SELECT * FROM mozos";
			if(!$result = $mysqli->query($sql)){
				die("Error en consulta");
			}
			
			echo "<table class='table' style='color:#000; text-align:center; '>";
		    echo "<tr><th style='text-align: center'>Id</th><th style='text-align: center'>Nombre del Mozo</th><th style='text-align: center'>Apellido del Mozo</th><th style='text-align: center'>Apodo del Mozo</th><th style='text-align: center'>Puntaje</th><th style='text-align: center'>Modificar</th><th style='text-align: center'>Eliminar</th></tr>";
		    while ($producto = $result->fetch_assoc()){

		        echo "<tr><td>";
		        echo $producto['id_mozo'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['nombremozo'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['apellidomozo'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['apodomozo'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['puntaje'] . " ";
		        echo "</td>";
		        echo "<td>";
				echo "<a href='modificar_mozo.php?codigo=".$producto['id_mozo']."'><span align='center' class='glyphicon glyphicon-edit'></span></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='eliminar_mozo.php?codigo=".$producto['id_mozo']."'><span class='glyphicon glyphicon-trash'></span></a>";
				echo "</td></tr>";
		    }
		    echo "</table>";
			
		?>
		
		<div class="form-group" align="center">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Registrar Nuevo Mozo</button>
		</div>
	</div>

	<!--****************************** LISTA DE PEDIDOS ************************************-->

	<div class="tipo_comida">
		
		<h2>Lista de Pedidos</h2><br><br>

		<?php


			$mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
			if($mysqli->connect_errno){

				die("Error en connect");
			}

			$sql = "SELECT * FROM atender";
			if(!$result = $mysqli->query($sql)){
				die("Error en consulta");
			}
			
			echo "<table class='table' style='color:#000; text-align:center; '>";
		    echo "<tr><th style='text-align: center'>Id</th><th style='text-align: center'>Pedido del Usuario</th><th style='text-align: center'>Mozo que atendio</th><th style='text-align: center'>Local</th><th style='text-align: center'>Mesa</th><th style='text-align: center'>Fecha</th><th style='text-align: center'>Verificar Pedido</th></tr>";
		    while ($producto = $result->fetch_assoc()){

		        echo "<tr><td>";
		        echo $producto['id_atencion'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['atencion_usu'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['atencion_mozo'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['atencion_local'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['atencion_mesa'] . " ";
		        echo "</td>";
		        echo "<td>";
		        echo $producto['atencion_fecha'] . " ";
		        echo "</td>";
		        echo "<td>";
				echo "<button type='button' class='btn btn-primary' data-target='#modalpedido' data-toggle='modal' data-usuario=".$producto['atencion_usu']." data-fecha=".$producto['atencion_fecha']. "><i align='center' class='material-icons'>visibility</i></button>";
				echo "</td></tr>";
		    }
		    echo "</table>";
			
		?>
	</div>

	<div class="locales_res">
		
		<h2 align="center">Gráfica de Ganancias por mes/año</h2><br><br>

		<div class="caja_chart">
            <select onChange="mostrarResultados(this.value);">
                <?php
                    for($i=2015;$i<2020;$i++){
                        if($i == 2016){
                            echo '<option value="'.$i.'" selected>'.$i.'</option>';
                        }else{
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                    }
                ?>
            </select>
        </div>
		<br><br>
        <div class="resultados_chart"><canvas id="grafico"></canvas></div>
        <br><br><br>

	</div>

	<!--********************* SCRIPT MODAL **********************-->

	<script type="text/javascript">
		
		/*********************** SCRIPT GRAFICO **********************/

		$(document).ready(mostrarResultados(2016));  
                function mostrarResultados(ano){
                    $.ajax({
                        type:'POST',
                        url:'../controlador/procesar.php',
                        data:'ano='+ano,
                        success:function(data){

                            var valores = eval(data);

                            var e   = valores[0];
                            var f   = valores[1];
                            var m   = valores[2];
                            var a   = valores[3];
                            var ma  = valores[4];
                            var j   = valores[5];
                            var jl  = valores[6];
                            var ag  = valores[7];
                            var s   = valores[8];
                            var o   = valores[9];
                            var n   = valores[10];
                            var d   = valores[11];
                                
                            var Datos = {
                                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                    datasets : [
                                        {
                                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                            data : [e, f, m, a, ma, j, jl, ag, s, o, n, d]
                                        }
                                    ]
                                }
                                
                            var contexto = document.getElementById('grafico').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                        }
                    });
                    return false;
                }


		/*********************** SCRIPT MODAL ***********************/
		$('#modalpedido').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var user = button.data('usuario')
		  var fecha = button.data('fecha') // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  //modal.find('.modal-title').text('Pedido de: ' + user)
		  //modal.find('.modal-body input').val(fecha)

		        if (window.XMLHttpRequest) {
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp = new XMLHttpRequest();
		        } else {
		            // code for IE6, IE5
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		        }
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("pedido_usuario").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","lista_pedido.php?q="+user+"& p="+fecha,true);
		        xmlhttp.send();
		})
	</script>
</body>
</html>