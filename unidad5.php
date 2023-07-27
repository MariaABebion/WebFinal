<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
	<section class="margen_inf">
		<h2>Consultas</h2>
		<?php
		function contendio_captcha(){
			$pattern="1234567890abcdefghijklmnopqrstuvwxyz#$%/?";
			$clave="";
		for ($i=0; $i<8;$i++){
			$clave .=$pattern[rand (0,39)];
		} return $clave;}
		$_SESSION ['captcha']=contendio_captcha();
		?>	
		 <form action="cargar.php" method="POST">
			<h3>Ingrese los datos solicitados para realizar su consulta</h3>
			<label for="apellido">Ingrese su Apellido:</label><br>
			<input type="text" name="apellido" maxlength="50" require><br>
			<label for="nombre">Ingrese su Nombre:</label><br>
			<input type="text" name="nombre" maxlength="30" require><br>
			<label for="mail">Ingrese su Correo Electrónico:</label><br>
			<input type="email" name="mail" require><br>
			<label for="consulta">Ingrese su consulta:</label><br>
			<textarea name="consulta" rows="5" cols="30" require></textarea><br>
			<img src= "img_captcha.php">
			<input type="text" name="codigo" placeholder="captcha">
			<input type="submit" value="Enviar">
	
		</form>
		<div class="alert alert-secondary" role="alert">
		<?php
		if (isset($_GET['error'])){
			echo "<p>Codigo incorrecto!</p>";
	  	}else{
		}if(isset($_GET['ok'])) {
			echo "<p>Los datos fueron cargados con exito.</p>";
		}
		?>
		</div>

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>