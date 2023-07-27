<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="css/lightbox.css">
</head>

<body>
	<div class="container">
		<header>
			<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
			<nav>
				<?php include("botonera.php"); ?>
			</nav>
		</header>
		<section>
			<h2>Imágenes con PHP</h2>
			<div class="pb-5">
				<h5 class="text-center m-3"><u>Imagen con Marca de Agua en php</u></h5>
				<img class="img-fluid" src="marca_agua.php" alt="Imagen con marca de agua" class="contImg">
			</div>
				
		</section>
		<aside>
			<div class="mb-2">
				<h5 class="text-center m-3"><u>Imagen aplicando Thumbnails</u></h5>
				<a href="images/unidad4.jpg" data-lightbox="image-1" data-title="Imagen Completa"><img src="thumbnails.php" alt="Imagen miniatura" class="rounded mx-auto d-block"></a>
				<br>
				<p><strong>Haga click en la imagen para ampliarla. </strong></p>
			</div>
		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>

	<script type="text/javascript" src="js/lightbox-plus-jquery.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>