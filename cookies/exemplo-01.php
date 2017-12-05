<?php 
$nome = array('empresa' =>'Dflug' , );
setcookie('NOME_COOKIES', json_encode($nome), time() + 3600);

echo "ok";


 ?>