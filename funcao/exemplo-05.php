<?php 

$b = 2;
function mudarValor(&$b){//passagem de parametro por REFERENÇA /* FOI ALTERADO NO ENDEREÇO DA MEMORIA ONDE ESTA A VARIAVEL $a

	$b +=50;
	return $b;
}

echo $b . "<br>";
echo mudarValor($b);
echo "<br>";
echo mudarValor($b);

echo "<br>" . $b;
