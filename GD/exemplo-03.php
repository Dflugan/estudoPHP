<?php 
$image = imagecreatefromjpeg("imagem/certificado.jpg");


$black = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 35, 0, 350, 250, $black, "fonts". DIRECTORY_SEPARATOR ."Indie_Flower". DIRECTORY_SEPARATOR ."IndieFlower.ttf", "CERTIFICADO");
imagettftext($image, 15, 0, 350, 280, $grey, "fonts". DIRECTORY_SEPARATOR ."Lato" . DIRECTORY_SEPARATOR . "Lato-Light.ttf", utf8_decode("Flávio Aparecido dos Santos"));
imagestring($image, 4, 370, 300, "Concluido em " . date("d-m-y"), $black);

header("Content-type: image/jpeg");

imagejpeg($image);
imagedestroy($image);

 ?>