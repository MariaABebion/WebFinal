<?php
include ("clases/registrar.php");
include ("clases/base_datos.php");
include ("constantes.php");

$base= new Basedatos(SERVIDOR, USUARIO, PASS, BASE);

$ingreso= new Registrar($base);

$mail=$_POST['mail'];

$ingreso->ingresarusuario($mail);

?>