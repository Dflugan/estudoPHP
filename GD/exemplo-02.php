<?php 
$image = imagecreatefromjpeg("imagem/certificado.jpg");

$titlteimage = imagecolorallocate($image, 0, 0, 0);// cor preto
$gray = imagecolorallocate($image, 100,100,100);// cor cinza claro

imagestring($image, 5, 450, 150, "CERTIFICADO", $titlteimage);//titulo
imagestring($image, 5, 440, 350, utf8_decode("Flávio Aparecido dos Santos"), $titlteimage);//nome do aluno
imagestring($image, 3,440, 370, "Concluido em. " . date("d-m-y H:i:s"), $titlteimage);//data do certificado

header("Content-type: image/jpeg");

imagejpeg($image, "imagem/certifica-".date("d-m-y").".jpg", 10);//salva o arquivo com extensão JPG 
imagedestroy($image);

 ?>