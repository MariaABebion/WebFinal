<?php session_start(); ?>
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
<h2>Registro</h2>
<div class="registro" id="registrarse">		
		<form action="cargarusuario.php" method="POST">
			<h3>Ingrese los datos solicitados</h3>
			<input type="email" name="mail" placeholder="Mail" max="100" require><br>
			<input type="password" name="password" placeholder="Password" min="60" require><br>
			<button class="botones" type="submit">Registrarse</button>
		</form>
</div>
<div id="msnregistro">
	    <?php 
		if(isset($_GET['ok'])) { 
			echo "<h5><b>El usuario se registro con exito.</b></h5>";
		} 	
		if (isset($_GET['mail_registrado'])){
		echo "<h5>El mail que intenta ingresar ya se encuentra registrado.</h5>";
        }  
		?>
</div>

<h2>Login</h2>

<div class="registro" id="login">			

	<form action="verificarusuario.php" method="POST">
			<input type="email" name="mail" placeholder="Mail" max="100" require <?php if(isset($_SESSION['mail'])){echo 'value="'.$_SESSION['mail'].'"';} ?>><br>
			<input type="password" name="password" placeholder="Password" min="60" require><br>
			<button class="botones" type="submit">Login</button>
	</form>
    
</div>
</section>
<aside>
<div class="versesion">
<?php 

		if(isset($_GET['usuario_error'])) {
			echo "<p>El usuario no existe.</p>";
		} 	
		if (isset($_GET['login_ok'])){
			echo "<h5>Usuario: </h5><h2>$_SESSION[mail]</h2>";?>
			<img class="img-fluid img-thumbnail" src="images/login.jpg" alt="Imagen Login">;
			<?php echo "<h5>Su Login fue realizado con exito.!</h5>";?>
			<a class="mostrar" href="salir.php" role="button">Cerrar Sesion</a>		
		<?php }
		if (isset($_GET['error_pass'])){
			echo "<p>La contraseña ingresada es incorrecta.</p>";
        } 
		
		?>
</div>
</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>