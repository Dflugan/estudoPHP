<?php 

echo date('d/m/y H:i:s', 1512387450);
echo '<br>';
echo time();
echo '<br>';

$st =  strtotime('+1 day');
echo date('l, d/m/y H:i:s A' , $st);

 ?>