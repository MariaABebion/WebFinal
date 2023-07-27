<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");
setlocale(LC_TIME,'spanish');
//variables
$apellido= $_POST['apellido'];
$nombre= $_POST['nombre'];
$mail= $_POST['mail'];
$comen= $_POST['comentario'];
$fecha= date("d-m-Y h:i:sa");
$texto="comentarios.txt";
  
  $f = fopen($texto,"a") or die("Error al abrir el archivo: $texto");
  $contenido= "<p><strong>Apellido:</strong> ".$_POST['apellido']."</p>
  <p><strong>Nombre:</strong> ".$_POST['nombre']."</p>
  <p><strong>Mail:</strong> ".$_POST['mail']."</p>
  <p><strong>Comentario:</strong> ".$_POST['comentario']."</p>
  <p><strong>Fecha de creación:</strong> ".$fecha."</p>
  <br>";
  fwrite($f,$contenido);
  fclose($f);
 

  header("Location:unidad3.php?ok");
?>