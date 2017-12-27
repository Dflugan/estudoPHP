<?php

$filename = "dll.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$type = $fileinfo->file($filename);

$href =  "data:". $type .";base64," . $base64;
 ?>
<html>
<a href="<?=$href?>" target="_blank">Link da imagem</a>
<a href="<?=$href?>"> Link 2</a>
<img src="<?=$href?>" >
</html>
