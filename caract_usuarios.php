<?php
include ("clases/usuarios.php");
if(isset($_POST['enviar'])){ 
    $fnombre = $_POST['nombre'];
    $fapellido = $_POST['apellido'];
    $ffechnac = $_POST['fechanac'];

	$usuarios = new Usuarios ($fnombre, $fapellido, $ffechnac);
    $usuarios ->imprime_caracteristicas();
}
?>