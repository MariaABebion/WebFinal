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
<section>

<h2>Listado de Productos</h2>

<?php
include_once ("verlistados.php");
	
$mostrar_prod= $prod->listarProductos();
	     
?>
	
<div class="table-responsive">		 
<table class="table">

		<tr>
			<th scope="col" colspan="6">Codigo</th>
			<th scope="col" colspan="6">Producto</th>
			<th scope="col" colspan="20">Descripcion</th>
			<th scope="col" colspan="5">Precio</th>
			<th scope="col" colspan="5"></th>
		</tr>	
		
		<tr>
		<?php 
		for ($i=0; $i<count($mostrar_prod); $i++){ 
		?>
		 
				<td colspan="6"><?php echo $mostrar_prod[$i]['codigo'];?></td>
				<td colspan="6"><?php echo $mostrar_prod[$i]['producto'];?></td>
				<td colspan="20"><?php echo $mostrar_prod[$i]['descripcion'];?></td>
				<td colspan="5">$<?php echo $mostrar_prod[$i]['precio'];?></td>
				<td scope="col" colspan="5"><a href="introducir_compra.php?id=<?php echo $mostrar_prod[$i]['codigo'];?>">Comprar</a></td>
		</tr>
		<?php }?>
		
</table>	
</div>
</section>

<aside class="compras">

<h2>Mis compras</h2>
<?php

$mostrar_compra= $comp->listarCompra();

?>
	<?php 
		for ($i=0; $i<count($mostrar_compra); $i++){ 
	?>
		<p><b>Codigo: </b><?php echo $mostrar_compra[$i]['codigo'];?></p>
		<p><b>Producto: </b><?php echo $mostrar_compra[$i]['producto'];?></p>
		<!-- <td colspan="6"><?php echo $mostrar_compra[$i]['descripcion'];?></td> -->
		<p><b>Precio: </b> $<?php echo $mostrar_compra[$i]['precio'];?></p>
		<p><a class="mostrar" href="eliminar_compra.php?id=<?php echo $mostrar_compra[$i]['id_compra'];?>">Eliminar</a></p>

	<?php } ?>
		
</aside>	

<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
</footer>
 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>