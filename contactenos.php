<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contactenos</title>
	<link rel="stylesheet" href="csscontact/normalize.css">
	<link rel="stylesheet" href="csscontact/stylec.css">
	<link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">

</head>
<body>
	
	<?php include("banner2.php") ?>
	<div class="contenedor cont-contactenos">

	<div class="platos">
			<div class="containero">
		  		<div class="rowa header">
		    		<h1>CONTÁCTENOS &nbsp;</h1>
		    		<h3>Rellene el formulario y aprenda más!</h3>
		  		</div>
		  	<div class="rowa body">
		    	<form action="enviar_correo.php" method="GET">
		      	<ul>
		        
		        	<li>
		          	<p class="left">
		            	<label for="first_name">Nombres</label>
		            	<input type="text" name="first_name" placeholder="John" required/>
		          	</p>
		          	<p class="pull-right">
		            	<label for="last_name">Apellidos</label>
		            	<input type="text" name="last_name" placeholder="Smith" required/>      
		          	</p>
		        	</li>
		        
		        	<li>
		          	<p>
		            	<label for="email">Correo <span class="req">*</span></label>
		            	<input type="email" name="email" placeholder="john.smith@gmail.com" required/>
		          	</p>
		        	</li>        
		        	<li><div class="divider"></div></li>
		        	<li>
		          		<label for="comments">Comentarios</label>
		          		<textarea cols="46" rows="3" name="comments" required></textarea>
		        	</li>
		        
		        	<li>
		         		<input class="btno btn-submito" type="submit" value="ENVIAR" />
		          		<small>o presione <strong>enter</strong></small>
		       		</li>
		        
		      	</ul>
		    	</form>  
		  	</div>
			</div>

			<!--GOOGLE MAPS-->
			<h2 class="titulomap">ENCUENTRENOS AQUÍ</h2>
			<div id="map" class="mapita"></div>
			<br><br>

			<h2 class="letracalidad">La calidad es lo primero!</h1>
			<div class="calidad">
		
				<img src="img/calidad1.png" alt="calidad1" class="imgcalidad">
				<img src="img/calidad2.png" alt="calidad1" class="imgcalidad">
				<img src="img/calidad3.png" alt="calidad1" class="imgcalidad">

			</div>
			<img src="img/cartel2.png" alt="cartel" class="cartel">
		</div>
	</div>
	<div class="footer-menu">
	

	</div>

	<!--SCRIPT PARA EL GOOGLE MAPS-->

	<script>

		function miMapa() {
		  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
		  var mapCanvas = document.getElementById("map");
		  var mapOptions = {center: myCenter, zoom: 15};
		  var map = new google.maps.Map(mapCanvas, mapOptions);
		  var marker = new google.maps.Marker({position:myCenter});
		  marker.setMap(map);
		  google.maps.event.addListener(marker,'click',function() {
		    var infowindow = new google.maps.InfoWindow({
		      content:"Restaurante EL GRIUX"
		    });
		  infowindow.open(map,marker);
		  });
		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARDaWnEIY6I_Ps0CUhN9XferHrfCMp9vQ&callback=miMapa"
        async defer></script>
</body>
</html>