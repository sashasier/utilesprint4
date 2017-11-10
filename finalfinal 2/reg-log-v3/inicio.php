	<?php
		require_once("soporte.php");

		$usuarioLogueado = $auth->usuarioLogueado($db);

		if ($usuarioLogueado == null) {
			$nombre = "Invitado";
		} else {
			$nombre = $usuarioLogueado->getUsername();
		};

		$usuarios = $db->traerTodos();

	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inicio</title>
			<?php include("header.php"); ?>
	</head>

	</body>
</html>
	<div class="form-banner">
		<form class="col-md-8" action="index.html" method="post">
			<div class="form-group col-md-3">
				<input type="text" class="form-control" id="direccion" placeholder="Donde es?" value="">
			</div>
		<form class="col-md-8" action="index.html" method="post">
			<div class="form-group col-md-3">
				<input type="text" class="form-control" id="horario" placeholder="A que hora es?" value="">
			</div>
		<form class="col-md-8" action="index.html" method="post">
			<div class="form-group col-md-3">
					<input type="text" class="form-control" id="personas" placeholder="Cuantos son?" value="">
			</div>
			<button class="button" type="button" name="enviar">enviar</button>
		<br>
	</div>
</div>

<section id="barras">
<div class="row">
	<div class="large-12 columns">
	<h2 style="text-align: center" id="b">Barras</h2>
			<h4 style="text-align: right">Ver todo</h4>
		<div class="owl-carousel owl-theme">
			<div class="item">
				<img src="imagenes/barra/barra1.jpg" alt="Barra1" width="200" height="240">
				<h4>Barra1</h4>
			</div>
			<div class="item">
				<img src="imagenes/barra/barra2.jpg" alt="Barra2" width="200" height="240">
				<h4>Barra2</h4>
			</div>
			<div class="item">
				<img src="imagenes/barra/barra3.jpg" alt="Barra3" width="200" height="240">
				<h4>Barra3</h4>
			</div>
			<div class="item">
				<img src="imagenes/barra/barra4.jpg" alt="Barra4" width="200" height="240">
				<h4>Barra4</h4>
			</div>
			<div class="item">
				<img src="imagenes/barra/barra5.jpg" alt="Barra5" width="200" height="240">
				<h4>Barra5</h4>
			</div>
			<div class="item">
				<img src="imagenes/barra/barra6.jpg" alt="Barra6" width="200" height="240">
				<h4>Barra6</h4>
			</div>
			<div class="item">
				<img src="imagenes/barra/barra7.jpg" alt="Barra7" width="200" height="240">
				<h4>Barra7</h4>
			</div>
			<div class="item">
				<img src="imagenes/barra/barra8.jpg" alt="Barra8" width="200" height="240">
				<h4>Barra8</h4>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: false,
					responsive: {
						0: {
							items: 2,
							nav: true
						},
						600: {
							items: 3,
							nav: false
						},
						1000: {
							items: 5,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>
	</div>
</div>
</section>

<section id="catering">
<div class="row">
	<div class="large-12 columns">
		<h2 style="text-align: center" id="c">Catering</h2>
		<h4 style="text-align: right">Ver todo</h4>
		<div class="owl-carousel owl-theme">
			<div class="item">
				<img src="imagenes/catering/cat1.jpg" alt="Catering1" width="200" height="240">
				<h4>Catering1</h4>
			</div>
			<div class="item">
				<img src="imagenes/catering/cat3.jpg" alt="Catering3" width="200" height="240">
				<h4>Catering3</h4>
			</div>
			<div class="item">
				<img src="imagenes/catering/cat4.jpg" alt="Catering4" width="200" height="240">
				<h4>Catering4</h4>
			</div>
			<div class="item">
				<img src="imagenes/catering/cat5.jpg" alt="Catering5" width="200" height="240">
				<h4>Catering5</h4>
			</div>
			<div class="item">
				<img src="imagenes/catering/cat6.jpg" alt="Catering6" width="200" height="240">
				<h4>Catering6</h4>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: false,
					responsive: {
						0: {
							items: 2,
							nav: true
						},
						600: {
							items: 3,
							nav: false
						},
						1000: {
							items: 5,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>
	</div>
</div>
</section>


	<section id="dj">
		<div class="row">
			<div class="large-12 columns">
				<h2 style="text-align: center" id="d">Dj's</h2>
				<h4 style="text-align: right">Ver todo</h4>
				<div class="owl-carousel owl-theme">
					<div class="item">
						<img src="imagenes/djs/dj1.jpg" alt="dj1" width="200" height="240">
						<h4>dj1</h4>
					</div>
					<div class="item">
						<img src="imagenes/djs/dj2.jpg" alt="dj2" width="200" height="240">
						<h4>dj2</h4>
					</div>
					<div class="item">
						<img src="imagenes/djs/dj3.jpg" alt="dj3" width="200" height="240">
						<h4>dj3</h4>
					</div>
					<div class="item">
						<img src="imagenes/djs/dj4.jpg" alt="dj4" width="200" height="240">
						<h4>dj4</h4>
					</div>
					<div class="item">
						<img src="imagenes/djs/dj5.jpg" alt="dj5" width="200" height="240">
						<h4>dj5</h4>
					</div>
					<div class="item">
						<img src="imagenes/djs/dj6.jpg" alt="dj6" width="200" height="240">
						<h4>dj6</h4>
					</div>
				</div>

				<script>
					$(document).ready(function() {
						$('.owl-carousel').owlCarousel({
							loop: true,
							margin: 10,
							responsiveClass: false,
							responsive: {
								0: {
									items: 2,
									nav: true
								},
								600: {
									items: 3,
									nav: false
								},
								1000: {
									items: 5,
									nav: true,
									loop: false,
									margin: 20
								}
							}
						})
					})
				</script>
			</div>
		</div>
	</section>


	<?php include("footer.php"); ?>
