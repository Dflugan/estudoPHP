<?php 

$dt = new DateTime();

echo $dt->format("d/m/y H:i:s");
echo "<br>";
$periodo = new Dateinterval("P5Y");

$dt->add($periodo);

echo $dt->format("d/m/y H:i:s");


 ?>