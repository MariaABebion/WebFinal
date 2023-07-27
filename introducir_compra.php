<?php
include ("clases/carrito.php");
include ("clases/base_datos.php");
include ("constantes.php");

$base= new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$prod= new Carrito($base);

$prod->seleccionarProducto($_GET['id']);

header("Location:unidad7.php?ok");
?>