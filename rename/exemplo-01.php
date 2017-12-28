<?php
$dir1 = "folder_001";
$dir2 = "folder_002";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "REDME.TXT";
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){
	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
	fwrite($file, date("d/m/y H:i:s"));
	fclose($file);
};
rename(
	$dir1 . DIRECTORY_SEPARATOR . $filename,
	$dir2 . DIRECTORY_SEPARATOR . $filename
);

echo "Arquivo foi removido com sucesso!!";

 ?>
