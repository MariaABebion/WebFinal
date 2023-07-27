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
		<h2>Usuarios</h2>

<form action="unidad6.php" method="POST">
			<h3>Ingrese los datos solicitados</h3>
			<label for="apellido">Ingrese su Apellido:</label><br>
			<input type="text" name="apellido" maxlength="50" require><br>
			<label for="nombre">Ingrese su Nombre:</label><br>
			<input type="text" name="nombre" maxlength="30" require><br>
			<label for="Fecha">Ingrese su Fecha de nacimiento:</label><br>
			<input type="date" name="fechanac" require><br>
			<input type="submit" value="Enviar" name="enviar">
	
</form>

	 
	</section>
	<aside>
   
	<?php include("caract_usuarios.php");?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>