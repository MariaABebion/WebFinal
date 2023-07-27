<?php 
$imageori= @imagecreatefromjpeg("images/unidad4.jpg");
$height= 150;
$width= 150; 
$reduImage= @imagecreatetruecolor($width, $height);
$imagenSave= @imagecreate($width, $height);
@imagecopyresized($reduImage,$imageori, 0, 0, 0, 0, $width,$height, imagesx($imageori),imagesy($imageori));
// @imagejpeg($reduImage,"images/unidad4mini.jpg"); // destino de la imagen, por algun motivo asi no funciona y es lo que me indicaron en el foro
@imagejpeg($reduImage); // destino de la imagen, asi funciona 
@imagedestroy($reduImage);

?>