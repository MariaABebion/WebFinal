<?php
session_start();
header("Contet-type: image/jpeg"); //damos el formato a la imagen
$img= imagecreate(120,40); //creamos la imagen captcha
$color_fondo= imagecolorallocate($img, 190,189,188);
$color_texto= imagecolorallocate($img, 61,0,153);
imagestring($img,5,20,10,$_SESSION['captcha'],$color_texto);
imagejpeg($img);
?>
