<?php
include ("clases/carrito.php");
include ("clases/base_datos.php");
include ("clases/producto.php");
include ("constantes.php");

$base= new Basedatos(SERVIDOR, USUARIO, PASS, BASE);

$prod= new Producto($base);
$verpdctos=$prod->listarProductos();

$comp = new Carrito($base);
$vercompra= $comp->listarCompra();

?>
