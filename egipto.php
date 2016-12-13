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

	</script>

</head>
<body onload="deslizar();">
	
  <div class="contenedor cont-egipto">
	<div class="banner2">
		
		<img src="img/letrerooficialsin.png" alt="letrera" class="letrero2">

		<!--OPCIONES EN LAS TABLAS-->

			<a href="index.php" class="index2">El Griux</a>
			<a href="menu.php" class="menu2">Menú</a>
			<a href="local.php" class="local2">Local</a>
			<a href="reservaciones.php" class="reservaciones2">Reservaciones</a>
			<a href="contactenos.php" class="contactenos2">Contáctenos</a>
			
	</div>

	<div class="platos">

		<img src="img/c1editado.png" alt="cabecera" class="cabecera">
		<div class="cabecera-platos">
			<a href="peru.php" class="peru"><img src="img/peruapagado.png" alt="peru" class="zoom"></a>
			<a href="china.php" class="china"><img src="img/chinaapagada.png" alt="china" class="zoom"></a>
			<a href="italia.php" class="italia"><img src="img/italiaapagada.png" alt="italia" class="zoom"></a>
			<a href="egipto.php" class="egipto"><img src="img/egiptoencendido.png" alt="egipto" class="activo"></a>
			<a href="australia.php" class="australia"><img src="img/australiaapgada.png" alt="australia" class="zoom"></a>
		</div>
		<div class="body-platos">
			
			<h2>ANTIPASTO</h2>
			<hr/>

			<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon-comida" name="palomaarroz">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.travelingeast.com/wp-content/uploads/2012/10/5458642835_e4a43bae40_b.jpg"></div>
                      	<div class="info">
                        <h3>PALOMA CON ARROZ</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="mashi">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="https://c4.staticflickr.com/4/3003/2548028515_32582280dd.jpg"></div>
                      	<div class="info">
                        <h3>MASHI</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="mulukhiyah">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Bai_po.JPG"></div>
                      	<div class="info">
                        <h3>MULUKHIYAH</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="ashura">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://recetasdeviajes.com/wp-content/uploads/2010/01/ashura.jpg"></div>
                      	<div class="info">
                        <h3>ASHURA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>

			</div>

		<h2>POLLO</h2>
			<hr/>
		
			<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon-comida" name="baklava">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.browneyedbaker.com/wp-content/uploads/2012/09/baklava-2-550.jpg"></div>
                      	<div class="info">
                        <h3>BAKLAVA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="fatta">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://sobreegipto.com/files/Fatta.jpg"></div>
                      	<div class="info">
                        <h3>FATTA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="brenejeasvinagreajo">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://sobreegipto.com/files/berenjenas2.jpg"></div>
                      	<div class="info">
                        <h3>BERENJENAS CON VINAGRE Y AJO</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="makroud">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.viajejet.com/wp-content/viajes/Makroud.jpg"></div>
                      	<div class="info">
                        <h3>MAKROUD</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>

			</div>
			
		<h2>PESCADO</h2>
			<hr/>

		<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon-comida" name="fulmedames">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.souschef.co.uk/bureau-of-taste/wp-content/plugins/slideshow-gallery/vendors/timthumb.php?src=wp-content/uploads/slideshow-gallery/ful-medammes-close.jpg&w=624&h=444&q=100&a=t"></div>
                      	<div class="info">
                        <h3>FULMEDAMES</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="bacalaovegetales">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://sobreegipto.com/wp-content/uploads/bacalao.jpg"></div>
                      	<div class="info">
                        <h3>BACALAO CON VEGETALES</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="kefta">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="https://foodcomas.files.wordpress.com/2012/05/p1160858.jpg"></div>
                      	<div class="info">
                        <h3>KEFTA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="dukkah">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.juliegoodwin.com.au/wsite/wp-content/uploads/2015/09/dukkah-2.jpg"></div>
                      	<div class="info">
                        <h3>DUKKAH</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>

			</div>
		
		<h2>MARISCOS</h2>
			<hr/>

			<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon-comida" name="tamiyafalafel">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://i702.photobucket.com/albums/ww24/Audax_Artifex/mezze/10-2.jpg"></div>
                      	<div class="info">
                        <h3>TAMIYAFALAFEL</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="hojaparrarellena">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="https://i.ytimg.com/vi/ncvfb4K6lqA/maxresdefault.jpg"></div>
                      	<div class="info">
                        <h3>HOJA DE PARRA RELLENA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="qatayef">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/%D9%82%D8%B7%D8%A7%D9%8A%D9%81_%D8%B9%D8%B5%D8%A7%D9%81%D9%8A%D8%B1%D9%8A2.jpg"></div>
                      	<div class="info">
                        <h3>QATAYEF</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="colmahasy">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://sobreegipto.com/wp-content/uploads/rollos-de-col.jpg"></div>
                      	<div class="info">
                        <h3>COLMAHASY</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>

			</div>

		</div>


	</div>
  </div>

<div class="footer-menu">
	
	
</div>

</body>
</html>