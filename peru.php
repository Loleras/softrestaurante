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
	
  <div class="contenedor cont-peru">
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
		<div class="cabecera-platos">
			<a href="peru.php" class="peru"><img src="img/peruencendido.png" alt="peru" class="activo"></a>
			<a href="china.php" class="china"><img src="img/chinaapagada.png" alt="china" class="zoom"></a>
			<a href="italia.php" class="italia"><img src="img/italiaapagada.png" alt="italia" class="zoom"></a>
			<a href="egipto.php" class="egipto"><img src="img/egiptoapagado.png" alt="egipto" class="zoom"></a>
			<a href="australia.php" class="australia"><img src="img/australiaapgada.png" alt="australia" class="zoom"></a>
		</div>
		<div class="body-platos">
			
			<h2>CARNE</h2>
			<hr/>

			<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://www.imaginaschool.edu.pe/informa/wp-content/uploads/2016/02/pachamanca.jpg"></div>
                      	<div class="info">
                        <h3>PACHAMANCA</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#pachamancamodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://www.sodexoclub.com.pe/repositorio/Cultura-Agosto-2014/lomo.jpg"></div>
                      	<div class="info">
                        <h3>LOMO SALTADO</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#saltadomodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://f.tqn.com/y/comidaperuana/1/W/c/D/-/-/seco-de-cabrito-a-la-norte-a.JPG"></div>
                      	<div class="info">
                        <h3>SECO DE CABRITO</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#cabritomodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://cde.peru.com/ima/0/0/2/7/2/272108/611x458.jpg"></div>
                      	<div class="info">
                        <h3>ROCOTO RELLENO</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#rocotomodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>

			</div>

		<h2>POLLO</h2>
			<hr/>
		
			<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://cde.peru.com/ima/0/1/4/0/7/1407077/611x458/gastronomia.jpg"></div>
                      	<div class="info">
                        <h3>ARROZ CON POLLO</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#arrozmodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="https://gcdn.emol.cl/cocina/files/2015/06/imagen-causa.jpg"></div>
                      	<div class="info">
                        <h3>CAUSA LIMEÑA</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#causamodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://i2.wp.com/angsarap.net/wp-content/uploads/2014/04/escabeche-wide.jpg"></div>
                      	<div class="info">
                        <h3>ESCABECHE</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#escabechemodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://cde.3.elcomercio.pe/ima/0/1/1/4/2/1142966/base_image.jpg"></div>
                      	<div class="info">
                        <h3>JUANE</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#juanemodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>

			</div>
			
		<h2>PESCADO</h2>
			<hr/>

		<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://recetaceviche.net/wp-content/uploads/2015/08/ceviche-mixto.jpg"></div>
                      	<div class="info">
                        <h3>CEVICHE</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#cevichemodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://recetasdecocinaperuana.com/wp-content/uploads/2015/10/rdcp-pescado-a-la-chorrillana.jpg"></div>
                      	<div class="info">
                        <h3>PESCADO A LA CHORILLANA</h3>
                        <br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#chorrillanamodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://www.panorama.com.ve/__export/1458336127612/sites/panorama/img/facetas/2016/03/18/chicha.jpg"></div>
                      	<div class="info">
                        <h3>CHICHARRON DE PESCADO</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#chicharronmodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://4.bp.blogspot.com/-e2798CTvA0I/UgOsPP8JliI/AAAAAAAAJSY/RIxhAoGwiPM/s1600/Salm%C3%B3n-a-la-parrilla.jpg"></div>
                      	<div class="info">
                        <h3>PESCADO A LA PARRILLA</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#parrillamodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>

			</div>
		
		<h2>MARISCOS</h2>
			<hr/>

			<div class="row" >
				
				<div class="col-sm-3">
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://perudelights.com/wp-content/uploads/2012/04/1.jpg"></div>
                      	<div class="info">
                        <h3>CHORITOS A LA CHALACA</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#choritosmodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>

					</div>

				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://f.tqn.com/y/enperu/1/L/R/G/-/-/picanteria-la-tradicion-arequipena_deviajesperu.jpg"></div>
                      	<div class="info">
                        <h3>CHUPE DE CAMARONES</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#chupemodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="http://cde.2.ofertop.pe/9126/small/image1.jpg"></div>
                      	<div class="info">
                        <h3>PARAHUAYA</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#parahuayamodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="cajon-comida">
						
						<div class="ih-item square effect15 left_to_right"><a>
						<div class="img"><img src="https://cde.ofertop.g3c.pe/7555/small/image2.jpg?20140516142405"></div>
                      	<div class="info">
                        <h3>ARROZ CON MARISCOS</h3>
                        <br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#mariscosmodal">Ver más</button>
                          <div class="iconosdiv">
                            <button class="icono"><img src="iconos/enamorado.png" alt="enamorado"></button>
                            <button class="icono"><img src="iconos/feliz.png" alt="feliz"></button>
                            <button class="icono"><img src="iconos/enfermo.png" alt="enfermo"></button>
                          </div>
                      	</div></a></div>
						
					</div>
				</div>

			</div>

		</div>


	</div>
  </div>

<div class="footer-menu">
	

</div>

<!--*****************************MODALES*******************************-->

<!-- Modal1 -->
<div id="pachamancamodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">PACHAMANCA</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal2 -->
<div id="saltadomodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">LOMO SALTADO</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal3 -->
<div id="cabritomodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">SECO DE CABRITO</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal4 -->
<div id="rocotomodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">ROCOTO RELLENO</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal5 -->
<div id="arrozmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">ARROZ CON POLLO</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal6 -->
<div id="causamodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">CAUSA LIMEÑA</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal7 -->
<div id="escabechemodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">ESCABECHE</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal8 -->
<div id="juanemodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">JUANE</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal9 -->
<div id="cevichemodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">CEVICHE MODAL</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal10 -->
<div id="chorrillanamodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">PESCADO A LA CHORRILLANA</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal11 -->
<div id="chicharronmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">CHICHARRON DE PESCADO</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal12 -->
<div id="parrillamodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">PESCADO A LA PARRILLA</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal13 -->
<div id="choritosmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">CHORITOS A LA CHALACA</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal14 -->
<div id="chupemodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">CHUPE DE CAMARONES</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal15 -->
<div id="parahuayamodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">PARAHUAYA</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal16 -->
<div id="mariscosmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">ARROZ CON MARISCOS</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>
			<div class="col-sm-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolores, voluptatum laudantium quo nemo obcaecati fugiat esse itaque facilis velit harum beatae, non alias eum ut dignissimos, vel delectus soluta?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!</p>
			</div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>