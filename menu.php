<?php
 
  $mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menú</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		
		function deslizar(){

			$(".letrero2").slideDown("slow");
			$(".index2").slideDown(2000);
			$(".menu2").slideDown(2000);
			$(".local2").slideDown(2000);
			$(".reservaciones2").slideDown(2000);
			$(".contactenos2").slideDown(2000);

		}

		function mostrar_img(){

			document.getElementById("imgmos").style.display = block;
		}

		function carta(str) {
		    if (str == "") {
		        document.getElementById("muestracarta").innerHTML = mostrar_img();
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
		                document.getElementById("muestracarta").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET","getcarta.php?q="+str,true);
		        xmlhttp.send();
		    }
		}



	</script>

</head>
<body onload="deslizar();">
	
  <div class="contenedor cont-menu">
	<div class="banner2">
		
		<img src="img/letrerooficialsin.png" alt="letrera" class="letrero2">
		<!--<a href="index.php"><img src="img/logooriginal2.png" alt="logu" class="logomenu"></a>-->

		<!--OPCIONES EN LAS TABLAS-->

			<a href="index.php" class="index2">El Griux</a>
			<a href="menu.php" class="menu2">Menú</a>
			<a href="local.php" class="local2">Local</a>
			<a href="reservaciones.php" class="reservaciones2">Reservaciones</a>
			<a href="contactenos.php" class="contactenos2">Contáctenos</a>
			
	</div>

	<div class="platos">

		<img src="img/c1editado.png" alt="cabecera" class="cabecera">
		<span class="letrascabecera">LA MEJOR COMIDA DE 5 PAÍSES</span>
		<div class="cabecera-platos">
			<a href="peru.php" class="peru"><img src="img/peruapagado.png" alt="peru" class="zoom"></a>
			<a href="china.php" class="china"><img src="img/chinaapagada.png" alt="china" class="zoom"></a>
			<a href="italia.php" class="italia"><img src="img/italiaapagada.png" alt="italia" class="zoom"></a>
			<a href="egipto.php" class="egipto"><img src="img/egiptoapagado.png" alt="egipto" class="zoom"></a>
			<a href="australia.php" class="australia"><img src="img/australiaapgada.png" alt="australia" class="zoom"></a>
		</div>
			
			<hr>
			<br>
			<h2 class="tituloplatos">CARTA</h2>
		
		<!--AJAX Y PHP-->
		
			<form class="opciones">
				<select name="platos" onchange="carta(this.value)">
	
				  	<option value="">Eliga:</option>
				  	<?php
															
					    $query = $mysqli -> query ("SELECT * FROM tipocomida");
																
					    	while ($valores = mysqli_fetch_array($query)) {
																	
					    	echo '<option value="'.$valores[idtipo].'">'.$valores[descriptipo].'</option>';
																		
					    }
					?>
				</select>
			</form>

		<!--BUSQUEDA CON AJAX Y PHP	

			<form action="busqueda_usu.php" method="get" class="col-xs-6">
			<br>
				<div class="form-inline">
			  		
						<input type="text" class="form-control" name="termino"></input>
						<input type="submit" class="btn btn-primary" value="Buscar"></input>
			  		
			  	</div>
			 <br>
			</form>-->

		<div id="muestracarta">
			<div id="imgmos">
				<img src="img/logomenu.png" alt="logo" align="center" width="60%">
			</div>
		</div>
		<img src="img/cartel2.png" alt="cartel" class="cartel">
	</div>		
</div>

<div class="footer-menu">
  

</div>
</body>
</html>