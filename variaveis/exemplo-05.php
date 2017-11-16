<?php
$nome = "Flavio";

function teste(){

  global $nome;
  echo $nome;
}

function teste2(){
  $nome = "Osvaldo";
  echo "<br>" . $nome;
}
teste();
teste2();

 ?>
