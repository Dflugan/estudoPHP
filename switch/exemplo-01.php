<?php

$data = 8;//date("w");
echo "Hoje é: ";

switch ($data){
    case 0:
        echo 'Domingo';
        break;
    case 1:
        echo 'Segunda';
        break;
    case 3:
        echo 'Terça';
        break;
    case 4:
        echo 'Quarta';
        break;
    case 5:
        echo 'Quinta';
        break;
    case 6:
        echo 'Sexta';
        break;
    case 7:
        echo 'Sabado';
        break;
    default :
        echo 'Data inválida';
}