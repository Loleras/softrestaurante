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
	
  <div class="contenedor cont-china">
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
			<a href="china.php" class="china"><img src="img/chinaencendida.png" alt="china" class="activo"></a>
			<a href="italia.php" class="italia"><img src="img/italiaapagada.png" alt="italia" class="zoom"></a>
			<a href="egipto.php" class="egipto"><img src="img/egiptoapagado.png" alt="egipto" class="zoom"></a>
			<a href="australia.php" class="australia"><img src="img/australiaapgada.png" alt="australia" class="zoom"></a>
		</div>
		<div class="body-platos">
			
			<h2>CARNE</h2>
			<hr/>

			<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon-comida" name="dimsum">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.globalasia.com/wp-content/uploads/2014/04/dimsum.jpg"></div>
                      	<div class="info">
                        <h3>DIM-SUM</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="sopaaletatiburon">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://cde.elcomercio.pe/66/ima/0/0/4/8/8/488416.jpg"></div>
                      	<div class="info">
                        <h3>SOPA DE ALETA DE TIBURÓN</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="lecholechuga">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.viajejet.com/wp-content/viajes/Abalon-en-lecho-de-lechuga.jpg"></div>
                      	<div class="info">
                        <h3>LECHO DE LECHUGA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="siewyhok">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://blogs.grupojoly.com/ropa-vieja/files/puratasca3.jpg"></div>
                      	<div class="info">
                        <h3>SIEWYHOK</h3>
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
					<div class="cajon-comida" name="arrozcongee">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://cocinaindochina.files.wordpress.com/2012/01/congee-sopa-arroz-cebolla-frita.jpg"></div>
                      	<div class="info">
                        <h3>ARROZ CONGEE</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="youtiao">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://travelerfolio.com/travelerfolio/uploads/you_tiao.jpg"></div>
                      	<div class="info">
                        <h3>YOUTIAO</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="chowmein">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://a.ctimg.net/6XefNw7DRYqzu99EuqarJw/recipechicken-chow-mein.jpg"></div>
                      	<div class="info">
                        <h3>CHOWMEIN</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="zongzi">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://p1.img.cctvpic.com/photoworkspace/contentimg/2015/06/12/2015061210252317175.jpg"></div>
                      	<div class="info">
                        <h3>ZONGZI</h3>
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
					<div class="cajon-comida" name="zhahefen">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://indfoodmaniac.xyz/wp-content/uploads/2015/12/kwetiau-740x430.jpg"></div>
                      	<div class="info">
                        <h3>ZHAHEFEN</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="banmian">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="https://littlehotmess.files.wordpress.com/2012/05/sg_03-dumpling-ban-mian1.jpg"></div>
                      	<div class="info">
                        <h3>BAN MIAN</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="barbadragon">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="https://upload.wikimedia.org/wikipedia/commons/6/67/Honey_of_Korea_traditional_food.jpg"></div>
                      	<div class="info">
                        <h3>BARBA DE DRAGÓN</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="bollopina">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://1.bp.blogspot.com/_DhjJ9LAe23Y/RrOeB10U6kI/AAAAAAAAAmo/0gUuH5zoNgk/s400/%E8%8F%A0%E8%90%9D%E5%8C%85.jpg"></div>
                      	<div class="info">
                        <h3>BOLLO DE PIÑA</h3>
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
					<div class="cajon-comida" name="pastelluna">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://p1.img.cctvpic.com/photoworkspace/contentimg/2014/08/20/2014082013405364613.jpg"></div>
                      	<div class="info">
                        <h3>PASTEL DE LUNA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="douhua">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://whatshieats.com/home/wp-content/uploads/2012/01/tumblr_low69joTUv1qlm9eto1_1280.png"></div>
                      	<div class="info">
                        <h3>DOUHUA</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="niangao">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://recetasdeviajes.com/wp-content/uploads/2011/07/414511142_27e1c7aff7.jpg"></div>
                      	<div class="info">
                        <h3>NIANGAO</h3>
                        <p>Description goes here</p>
                        <button class="btn btn-primary">Ver más</button>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida" name="sachima">
						
						<div class="ih-item square effect15 left_to_right"><a href="#">
						<div class="img"><img src="http://www.gelgoogm.com/uploads/allimg/160317/9-16031GG411.jpg"></div>
                      	<div class="info">
                        <h3>SACHIMA</h3>
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