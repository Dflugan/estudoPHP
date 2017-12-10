<?php
function __autoload($nomeClasse){
  var_dump($nomeClasse);
  require_once("$nomeClasse.php");
}

$delrei = new Delrey;
$delrei->acelerar(80);

 ?>
