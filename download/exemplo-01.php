<?php

$url = "https://www.facebook.com/MonicaSincerona/videos/711522232386836/";

$contents = file_get_contents($url);//download do conteudo do arquivo

$parse = parse_url($url);//interpreta o arquivo

$basename = basename($parse['path']); // pegar o nome do arquivo

$file = fopen('teste\\'.$basename, "w+");

fwrite($file, $contents);

fclose($file);

?>

<img src="<?='teste\\'.$basename?>"/>