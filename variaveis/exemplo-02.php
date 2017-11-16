<?php
/*
Comentário do PHP
*/

$nomeCorreto = "Forma correta de criar variaveis";
$anoNascimento = 1990;
$sobreNome = "Santos";
//Nalinha de baixo váriavel com numero
$numero1 = 1;
$nome = "Flavio";

$nomeCompleto = $nome . " " .$sobreNome;
echo $nomeCompleto;
exit;
echo $numero1;
echo "<br>";
unset($numero1);

if (isset($numero1)) {
    echo $numero1;
}else {
  echo "Não existe";
}
