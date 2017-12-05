<?php
$validar = TRUE;
while ($validar){
    $produto = 14000;
    $desconto = 5;
    if($produto > 1000){
        
        echo $produto = $produto - ($produto * ($desconto / 100) ). "<br>";
        $validar = FALSE;
    }
    
}