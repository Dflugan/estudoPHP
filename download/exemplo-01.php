<?php

$url = "https://precoscarros.com.br/wp-content/uploads/2016/11/Novo-HB20-2018-05.jpeg";

$contents = file_get_contents($url);//download do conteudo do arquivo

$parse = parse_url($url);//interpreta o arquivo

$basename = basename($parse['path']); // pegar o nome do arquivo

$extension = strstr($basename, ".");
$pathFile = 'teste\\'.$basename;
$separetor = explode(".", $basename);
$filename = $separetor[0];

if (file_exists($pathFile)) {
  $rand = rand(1,20);
  $basenameNew = 'teste\\'. $filename . "_" . $rand . $extension;
  $file = fopen($basenameNew, "w+");
  fwrite($file, $contents);
}
$file = fopen($pathFile, "w+");

fwrite($file, $contents);

fclose($file);

?>

<img src="<?='teste/'.$basename?>"/>
