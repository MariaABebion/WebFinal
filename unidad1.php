
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
		<h2>Agenda de clases</h2>
		<?php include("ver_clases.php"); ?>
		
	</section>
	
	<aside>
    
	<?php include("conection.php");?>

	<h4>Agendar una nueva clase</h4>
	<br>
	<form class= "form-row" method = "POST" action ="insertar_clases.php">
	
    <div>
		<label>Ingrese la clase a cursar:</label>
		<input type="text" class="form-control" name="unidad" placeholder= "Unidad" maxlenght="30" required>
    </div>
	<br>
	<div>
		<label>Ingrese la fecha de cursado:</label>	
		<input type="date" class="form-control" name="fecha" placeholder= "Fecha" required>
    </div>
	<br>
	<input type="submit">
	<br>
		<div >
			<?php if(isset($_GET['ok'])) {
				echo "<h4>La clase se cargo con exito.</h4>";
			}
			?>
		</div>	  		
	</form>	

  	</aside>

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>