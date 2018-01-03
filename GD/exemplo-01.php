<?php
header("Content-type: image/png");

$image = imagecreate(256,256);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 50, 120, "Teste texto imagem", $red);
imagestring($image, 1, 60, 135, "Sub texto teste", $black);
imagepng($image);
imagedestroy($image);

 ?>
