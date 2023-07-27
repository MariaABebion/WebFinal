<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
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
		<h2>Comentarios</h2>
		
	<div id="mostrar">
		<?php
			$vertexto= "comentarios.txt";
			$abrir = fopen($vertexto,"r") or die("Error al abrir el archivo: $vertexto");
			fpassthru($abrir);
			fclose($abrir);
		?>

	</div>
	</section>
	<aside>
    <form action="comentarios.php" method="POST">
	<h3>Ingrese los datos solicitados si quiere dejarnos un comentario</h3>
			<label for="apellido">Ingrese su Apellido:</label><br>
			<input type="text" name="apellido" maxlength="100" require><br>
			<label for="nombre">Ingrese su Nombre:</label><br>
			<input type="text" name="nombre" maxlength="100" require><br>
			<label for="mail">Ingrese su Correo Electrónico:</label><br>
			<input type="email" name="mail" require><br>
			<label for="comentario">Ingrese un comentario:</label><br>
			<textarea name="comentario" rows="5" cols="30" require></textarea><br>
			<input type="submit" value="Enviar">
	
		</form>
    </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>