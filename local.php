<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Local</title>
	<link rel="stylesheet" href="fonts.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
	<?php include("banner2.php") ?>
	<div class="contenedor cont-local">
		
	 <div class="platos">	
		<h1 class="titulolocal">EL MEJOR LOCAL, Y LA MEJOR COMIDA</h1><br><br><br>
		<img src="img/marco4.png" alt="Cuadro" class="cuadro1">
		<div class="main1">
			<div class="slides">
				<img src="http://asadorgauchodiaz.es/wp-content/uploads/2013/01/DSC_0011-1024x680.jpg" alt="">
				<img src="http://www.restaurantegarden.com/wp-content/flagallery/instalaciones-y-detalles/fusion-ambientes-restaurante-garden-zaragoza.jpg" alt="">
				<img src="http://www.paradordeljamon.com/wp-content/uploads/parador-del-jamon-bg12.jpg" alt="">
				<img src="http://www.ahstatic.com/photos/8212_rsfh_01_p_1024x728.jpg" alt="">
			</div>
		</div>

		<img src="img/marco4.png" alt="Cuadro" class="cuadro2">
		<div class="main2">
			<div class="slides">
				<img src="http://vidalengineering.com/uploads/3/4/2/6/3426813/_3213882_orig.jpg" alt="">
				<img src="http://www.agoracosmopolitan.com/news-img/maximum/15527.jpg" alt="">
				<img src="http://mundodelcafe.es/wp-content/uploads/2015/12/rustico.jpg" alt="">
				<img src="http://www.teveoenmadrid.com/files/2012/07/restaurante-muc3b1agorri-zona-tapas.jpg" alt="">
			</div>
		</div>

		<img src="img/marco4.png" alt="Cuadro" class="cuadro3">
		<div class="main3">
			<div class="slides">
				<img src="http://www.clubescampestresenchosica.com/restaurantes-chosica/images/chosica_restaurantes.jpg" alt="">
				<img src="http://colombiatoshare.com/portafolios/montaditos/1.jpg" alt="">
				<img src="http://img10.naventcdn.com/avisos/11/00/51/12/34/47/1200x1200/43682658.jpg" alt="">
				<img src="https://restorando-res.cloudinary.com/image/upload/s--CqbHWcey--/c_fit,f_auto,h_500,w_700/v1430421359/restaurant_photos/d/7907/62192/restaurante_balsamico-campestre_b_campestre_5.jpg" alt="">
			</div>
		</div>
	 </div>
	 <img src="img/cartel2.png" alt="cartel" class="cartel">
	</div>

	<div class="footer-menu">
	

	</div>
	<script src="jsslide/jquery.slides.js" ></script>
	<script>
 
	$(function(){
  	$(".slides").slidesjs({
	    play: {
	      active: true,
	        // [boolean] Generate the play and stop buttons.
	        // You cannot use your own buttons. Sorry.
	      effect: "slide",
	        // [string] Can be either "slide" or "fade".
	      interval: 5000,
	        // [number] Time spent on each slide in milliseconds.
	      auto: false,
	        // [boolean] Start playing the slideshow on load.
	      swap: true,
	        // [boolean] show/hide stop and play buttons
	      pauseOnHover: false,
	        // [boolean] pause a playing slideshow on hover
	      restartDelay: 2500
	        // [number] restart delay on inactive slideshow
	    }
	  });
	});
	 
	</script>
</body>
</html>