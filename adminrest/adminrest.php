<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adminitración del Restaurante</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower|Didact+Gothic|Alfa+Slab+One|Patua+One" rel="stylesheet">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/adminrest.css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="portada">
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
	        <li><a href="adminrest.php">Home</a></li>
	        <li><a href="login.php">Ordenar Pedido</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>


	<!--Divisiones-->

		<div class="imgportada">
			
			<div class="logo">
				
				<img src="../img/logotomato.png" alt="logo" class="logotomato">

				<h1 class="titulo1">COMIDA DELICIOSA</h1>
				<h3>El Griux es el restaurante con la mejor comida!</h3>
			</div>
		</div>
		<div class="restaurant">
			
			<h1>EL RESTAURANTE</h1>
			<h3>Un poco sobre nosotros y como empezamos</h3>
			<hr>
			<div class="restaurant-divi">
				<div class="row">
					
					<div class="col-md-4">
						
						<div class="row ed-img">
							<img src="../img/fondomenu.jpg" alt="menu" width="100%">
						</div>
						<div class="row">
							
							<div class="col-md-6 ed-img">
								
								<img src="../img/fondoaustralia.jpg" alt="menu" width="100%">

							</div>
							<div class="col-md-6 ed-img">
								
								<img src="../img/fondolocal.jpg" alt="menu" width="100%">

							</div>
						</div>
					</div>
					<div class="col-md-8 tex">
						
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, unde quidem perferendis hic quam delectus facere architecto iusto, expedita reprehenderit eos, molestias repudiandae sed voluptatibus ipsam debitis nam et aliquid!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, unde quidem perferendis hic quam delectus facere architecto iusto, expedita reprehenderit eos, molestias repudiandae sed voluptatibus ipsam debitis nam et aliquid!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, unde quidem perferendis hic quam delectus facere</h3>
					</div>

				</div>
			</div>
		</div>


		<div class="especiales">
			
			<h1>ESPECIALES DE LA CASA</h1>
			<h3>Aquí les presentamos los especiales que todos prefieren!</h3>
			<hr>

			<!--*********************************CARRUSEL**********************************-->
			<div id="myCarousel" class="carousel slide car" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				    <li data-target="#myCarousel" data-slide-to="3"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">

				    	  <img src="../img/fondoaustralia.jpg" alt="Chania">
				      
				      <div class="carousel-caption">
				        <h3>Chania</h3>
				        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="../img/fondoreservaciones.jpg" alt="Chania">
				      <div class="carousel-caption">
				        <h3>Chania</h3>
				        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="../img/fondolocal.jpg" alt="Flower">
				      <div class="carousel-caption">
				        <h3>Flowers</h3>
				        <p>Beatiful flowers in Kolymbari, Crete.</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="../img/fondoperu.jpg" alt="Flower">
				      <div class="carousel-caption">
				        <h3>Flowers</h3>
				        <p>Beatiful flowers in Kolymbari, Crete.</p>
				      </div>
				    </div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
		</div>

		<div class="cualidades">
			
			<h1 class="titulocua">Nuestras Cualidades</h1>
			<h3>Pequeñas cosas que marcan la diferencia</h3>
			<hr>
			<div class="row">
				
				<div class="col-sm-4">
					
					<div class="cualidad1">
						
						<div class="imgcua">
							<img src="../img/fondomenu.jpg" alt="imagen1" width="100%;">
						</div>
						<div class="textcua">
							<h2 class="titcu">Sirviendo con Amor</h2>
							<hr class="divcua">
							<h4 class="cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste molestiae incidunt repudiandae fugiat iusto porro, praesentium culpa, tenetur distinctio expedita recusandae animi, veniam at magnam eaque doloribus nobis quas doloremque!</h4>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					
					<div class="cualidad2">
						
						<div class="imgcua">
							<img src="../img/fondoaustralia.jpg" alt="imagen1" width="100%;">
						</div>
						<div class="textcua">
							<h2 class="titcu">Sirviendo con Amor</h2>
							<hr class="divcua">
							<h4 class="cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste molestiae incidunt repudiandae fugiat iusto porro, praesentium culpa, tenetur distinctio expedita recusandae animi, veniam at magnam eaque doloribus nobis quas doloremque!</h4>
						</div>						
						
					</div>
					
				</div>

				<div class="col-sm-4">
					
					<div class="cualidad3">
						
						<div class="imgcua">
							<img src="../img/fondomenu.jpg" alt="imagen1" width="100%;">
						</div>
						<div class="textcua">
							<h2 class="titcu">Sirviendo con Amor</h2>
							<hr class="divcua">
							<h4 class="cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste molestiae incidunt repudiandae fugiat iusto porro, praesentium culpa, tenetur distinctio expedita recusandae animi, veniam at magnam eaque doloribus nobis quas doloremque!</h4>
						</div>	
						
					</div>
					
				</div>

			</div>
		</div>

		<div class="footera">
			
			<div class="row">
				
				<div class="col-sm-6">
					
					<div class="izq">
						<h4>&#169 Copyright Grupo Linecode - Griux &#169</h4>
					</div>
				</div>

				<div class="col-sm-6">
					
					<div class="der">
						
						<a href="https://www.facebook.com/" target="_blank"><img src="../iconos/facebook.png" alt="facebook" class="imgl"></a>
						<a href="https://www.pinterest.com/" target="_blank"><img src="../iconos/pinterest.png" alt="pinterest" class="imgl"></a>
						<a href="https://twitter.com/" target="_blank"><img src="../iconos/twitter.png" alt="twitter" class="imgl"></a>
						<a href="https://www.instagram.com/" target="_blank"><img src="../iconos/instagram.png" alt="instagram" class="imgl"></a>
						<a href="https://www.tumblr.com/" target="_blank"><img src="../iconos/tumblr.png" alt="tumblr" class="imgl"></a>	

					</div>
				</div>

			</div>

		</div>
</div>
</body>
</html>