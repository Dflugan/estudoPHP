<?php
interface Veiculo
{
	public function acelerar($acelerar);
}

abstract class Carro implements Veiculo
{
	public function acelerar($acelerar)
	{
		echo "O veiculo acelerou até " . $acelerar . "Km/h";
	}
}
 ?>
