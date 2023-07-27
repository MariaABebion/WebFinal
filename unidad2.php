<?php session_start();  ?>

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
		<h2>Eventos</h2>
   
   <form method="POST" action="calculo_fecha.php">
      
	    <label for="dia">Dia:</label><br>
		<input type="number" name="dia" min="01" max="31" placeholder="Ingrese el dia" require><br>
		<label for="mes">Mes:</label><br>
		<input type="number" name="mes" min="01" max="12" placeholder="Ingrese el mes" require><br>
		<label for="anio">Año:</label><br>
		<input type="number" name="anio" min="1900" max="2100" placeholder="Ingrese el año" require><br>
	   <input type="submit" name="calculo" value="Calcular">
	 </form>

	</section>
	<aside>
	
	<?php
				if(isset($_SESSION['mostrarResultado'])){

					echo "<h2>La fecha ingresada es:</h2>";
					echo "<p><strong>Dia: " . $_SESSION['dia'] . "/". $_SESSION['mes'] ."/". $_SESSION['anio'] ."</p></strong>";
					
					echo "<p><strong>Faltan: " . $_SESSION['mostrarResultado'] . " dias</p></strong>";
					
				 	echo '<a href="unidad2.php">BORRAR RESULTADO</a>';

					unset($_SESSION['mostrarResultado']);
					unset($_SESSION['dia']);
					unset($_SESSION['mes']);
					unset($_SESSION['anio']);

				}
	?>
	
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
   
</body>
</html>