<?php
include ("clases/registrar.php");
include ("clases/base_datos.php");
include ("constantes.php");

$base= new Basedatos(SERVIDOR, USUARIO, PASS, BASE);

$validate= new Registrar($base);
 $mailingresada=$_POST['mail'];
$claveingresada=$_POST['password'];

$validate->validarusuario($mailingresada,$claveingresada);

?>