<?php 
function ola($texto, $periodo='Bom dia'){

	return "Olá $texto!, $periodo! <br>";
}

echo ola('Mundo');
echo ola('Flavio', 'Boa tarde');
echo ola('Gabriel', 'boa noite');

 ?>