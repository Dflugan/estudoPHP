<?php

$filename = "dll.png";

$file = base64_encode(file_get_contents($filename));
$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$filetype = $fileinfo->file($filename);

$fileImg =  "data:" . $filetype . ";base64," . $file;

?>
 <img src="<?=$fileImg?>">
