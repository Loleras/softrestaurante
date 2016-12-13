<?php
 
  $mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservaciones</title>
	<link rel="stylesheet" href="css/estreser.css">
	
	<script type="text/javascript">

	function nada(){

			document.getElementById("imgmos").style.display = block;
	}

	function mesas_local(str) {
		    if (str == "") {
		        document.getElementById("mesita").innerHTML = nada();
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
		        xmlhttp.open("GET","getmesa.php?q="+str,true);
		        xmlhttp.send();
		    }
		}
	</script>
	
</head>
<body>
	
	<?php include("banner2.php") ?>

	<!--******************PROBANDO MODAL********************-->

	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" id="modalcondiciones" role="dialog">
	    <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">

	        <h3 class="modal-title" id="exampleModalLabel">Términos y condiciones</h3>
	      </div>
	      <div class="modal-body">
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit at modi in dicta omnis aliquid necessitatibus laborum itaque, recusandae saepe temporibus obcaecati, repellendus molestiae, iste repudiandae minima esse quasi. Nobis!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit at modi in dicta omnis aliquid necessitatibus laborum itaque, recusandae saepe temporibus obcaecati, repellendus molestiae, iste repudiandae minima esse quasi. Nobis!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit at modi in dicta omnis aliquid necessitatibus laborum itaque, recusandae saepe temporibus obcaecati, repellendus molestiae, iste repudiandae minima esse quasi. Nobis!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit at modi in dicta omnis aliquid necessitatibus laborum itaque, recusandae saepe temporibus obcaecati, repellendus molestiae, iste repudiandae minima esse quasi. Nobis!</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	  </div>
		
	<!--****************************************************-->
	<div class="contenedor cont-reservaciones">
		
		<div class="platos">

			<div class="advertenciacajon">
				
				<div class="advertencia">
					
					<h1 class="letraad">Advertencia:</h1>
					<p class="letraad2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vitae iste, ad voluptate deleniti repudiandae amet officia laudantium est, beatae voluptates natus officiis quidem ipsam nemo quas suscipit quisquam. Dicta.</p>

				</div>

			</div>

			<div class="modal-wrapper-paso">
  				<div class="modal-header-paso">
    				<p><strong>Reservación</strong></p><span class="is-active"></span><span></span><span></span>
  				</div>
  			<div class="modal-bodies-paso">
   				<div class="modal-body-paso modal-body-step-1 is-showing">
      				<form action="enviar_reservacion.php" method="GET">
				        <label><span>Nombre Completo</span>
				          <input type="text" name="resnombres" placeholder="Ernesto Z. Chura Flores" />
				        </label>
				        <label><span>Email</span>
				          <input type="email" name="resemail" placeholder="zhildeercf@outlook.com" />
				        </label>
				        <label> <span>DNI</span>
				          <input type="dni" name="resdni" placeholder="71508945"/>
				        </label>
				        <label> <span>Celular</span>
				          <input type="tel" name="rescelular" placeholder="943880581" />
				        </label>
				        <label><span>Fecha de Reservación</span>
				          <input type="date" name="resfecha" />
				        </label>
				        <label><span>Hora</span>
				          <input type="time" name="reshora" />
				        </label>
				        <label> <span>Local</span>
				          	<select name="reslocal" onchange="mesas_local(this.value)">
					        	<option value="0">Eliga:</option>
					        	<?php
															
					          		$query = $mysqli -> query ("SELECT * FROM local");
																
					          		while ($valores = mysqli_fetch_array($query)) {
																	
					            	echo '<option value="'.$valores[idlocal].'">'.$valores[nombrelocal].'</option>';
																		
					          		}
					        	?>
					      	</select>
				        </label>
				        <br>
				        <label> <span>Mesa</span></label>
				        <div id="mesita">

				        	<p><strong>Aún no ha elegido un local!</strong></p>
					    </div>
				        

				        <label> <span>Tipo de Pago</span>
				          	<label class="radio-inline"><input type="radio" name="optradio" value="1" style="width: 20px; margin-top:10px;" /><img src="img/visa.png" alt="Visa" width="50px"></label>
							<label class="radio-inline"><input type="radio" name="optradio" value="2" style="width: 20px; margin-top:10px;"><img src="img/paypal.png" alt="Paypal" width="70px"></label>
							<label class="radio-inline"><input type="radio" name="optradio" value="3" style="width: 20px; margin-top:10px;"><img src="img/mastercard.jpg" alt="Mastercard" width="60px"></label>
				        </label><br><br>
				        <label><span>N° de Tarjeta</span>
				          <input type="number" id=""  name="restarjeta" />
				        </label>
				        <label><span>Fecha de Expiración</span>
				          <input type="date" id="fecexp" name="resexpiracion" />
				        </label>
				        <label><span>Código de Seguridad</span>
				          <input type="number" id="codseg" name="resseguridad" />
				        </label>
				        <p>Al hacer click en "Hacer Reservación", Ud. está aceptando los <a href="#" data-target='#modalcondiciones' data-toggle='modal'>términos y condiciones</a></p>
				        <div class="center-paso">
				          <input type="submit" class="button-paso not-finished" value="Enviar"></input>
				        </div>

				    </form>
    			</div>
  			</div>
			</div>
			<img src="img/cartel2.png" alt="cartel" class="cartel">
		</div>
	
	</div>
	
	<div class="footer-menu">
	
		

	</div>
	
</body>
</html>