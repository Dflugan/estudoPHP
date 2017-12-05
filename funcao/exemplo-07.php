<?php 

function soma(float ...$valores): float{

	return array_sum($valores);
}

var_dump(soma(2,3,5));
echo "<br>";
echo soma(22,23,55);
echo "<br>";
echo soma(1.2,1.5);


?>