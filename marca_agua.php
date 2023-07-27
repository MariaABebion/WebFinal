<?php 
$imagen= "images/php.png";
$marcaDeAgua="images/marca.png";

$img= imagecreatefrompng($marcaDeAgua);
$ext= substr($imagen, -3);
$ext= strtolower($ext);

switch ($ext) {
	case 'gif':
		$img2= imagecreatefromgif($imagen);
		break;
	case 'jpg':
		$img2= imagecreatefromjpeg($imagen);
		break;
	case 'png':
		$img2= imagecreatefrompng($imagen);
		break;
	
}

imagecopy($img2, $img, (imagesx($img2)/2), (imagesy($img2)/2), (imagesx($img)/500), (imagesy($img)/500), imagesx($img), imagesy($img));
header("Content-type: imagen/jpeg");
imagejpeg($img2);
imagedestroy($img);
imagedestroy($img2);


?>
