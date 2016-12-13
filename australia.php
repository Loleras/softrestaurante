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
	
  <div class="contenedor cont-australia">
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
			<a href="egipto.php" class="egipto"><img src="img/egiptoapagado.png" alt="egipto" class="zoom"></a>
			<a href="australia.php" class="australia"><img src="img/australiaencendida.png" alt="australia" class="activo"></a>
		</div>
		<div class="body-platos">
			
			<h2>ANTIPASTO</h2>
			<hr/>

			<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon-comida" name="lamington">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://eatlittlebird.com/wp-content/uploads/2012/01/lamingtons-3.jpg"></div>
                      	<div class="info">
                        <h3>LAMINGTON</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="meatpie">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://cdn-media-1.lifehack.org/wp-content/files/2015/01/9pie1.jpg"></div>
                      	<div class="info">
                        <h3>MEATPIE</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="canguro">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://static1.absolutaustralia.com/wp-content/uploads/2010/08/australia.jpg"></div>
                      	<div class="info">
                        <h3>CANGURO</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="fishnchips">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2013/4/2/1364925186743/Fish-and-Chips-cod-food-s-011.jpg"></div>
                      	<div class="info">
                        <h3>FISH AND CHIPS</h3>
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
					<div class="cajon-comida" name="hamburguesaremolacha">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://cdn.glamour.es/uploads/images/thumbs/201524/receta_hamburguesa_remolacha_9225_544x418.jpg"></div>
                      	<div class="info">
                        <h3>HAMBURGUESA DE REMOLACHA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="cocodrilo">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.info7.mx/foto/610000/612676_comida-5.jpg"></div>
                      	<div class="info">
                        <h3>COCODRILO</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="hamburguesaemu">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.aussieyoutoo.com/wp-content/uploads/2015/03/emu.png"></div>
                      	<div class="info">
                        <h3>HAMBURGUESA DE EMÚ</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="larvaswitchetty">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://2.bp.blogspot.com/-o0mW8damsgk/Vjky40izCKI/AAAAAAAAGVA/pvlSyyaNTfU/s1600/images.jpg"></div>
                      	<div class="info">
                        <h3>LARVAS WITCHETTY</h3>
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
					<div class="cajon-comida" name="pastelmacadamia">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://previews.123rf.com/images/siraphol/siraphol1312/siraphol131200491/24191907-Pastel-de-Macadamia-Foto-de-archivo.jpg"></div>
                      	<div class="info">
                        <h3>PASTEL DE MACADAMIA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="weetbix">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Weetbix_Stevage.jpg"></div>
                      	<div class="info">
                        <h3>WEETBIX</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="filetesanpedro">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.my-vb.com/img/assets/recipes/q.%20bar%20haricots%20noirs2.jpg"></div>
                      	<div class="info">
                        <h3>FILETE DE SAN PEDRO</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="icedvovo">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://loveswah.com/wp-content/uploads/no-bake-iced-vovo-balls5-700x490.jpg?1bf242"></div>
                      	<div class="info">
                        <h3>ICEDVOVO</h3>
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
					<div class="cajon-comida" name="barbacoa">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://ecotrip.es/wp-content/uploads/2015/07/Barbacoa-1.jpg"></div>
                      	<div class="info">
                        <h3>BARBACOA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="pavlova">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.taste.com.au/images/recipes/wfr/2005/10/pavlova-9947_l.jpeg"></div>
                      	<div class="info">
                        <h3>PAVLOVA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="rollossalchihca">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://t1.uccdn.com/images/8/2/2/img_21228_apa_250844_600.jpg"></div>
                      	<div class="info">
                        <h3>ROLLOS DE SALCHICHA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="barramundi">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.bridetobe.com.au/images/default-source/article-library/easy-recipes-crispy-skin-barramundi.jpg?sfvrsn=2"></div>
                      	<div class="info">
                        <h3>BARRAMUNDI</h3>
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