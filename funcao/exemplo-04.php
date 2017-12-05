<?php 
function ola(){

	$argumentos = func_get_args();

	return $argumentos;
}

$ola = ola('Flávio', 'Boa tarde');
echo $ola[0] . "<br>";
var_dump($ola);

 ?>