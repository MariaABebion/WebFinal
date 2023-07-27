<?php
include ("clases/base_datos.php");
include ("constantes.php");
include ("clases/producto.php");
include ("clases/carrito.php");

$base= new Basedatos (SERVIDOR, USUARIO, PASS, BASE);
$comp = new Carrito($base);


$comp->eliminarCompra($_GET['id']);

header("Location:unidad7.php");
?>