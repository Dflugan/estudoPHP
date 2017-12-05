<?php 

interface Veiculo
{
	public function acelerar($acelerar);
	public function frenar($acelerar);
	public function trocarMacha($macha);
}

abstract class Automove implements Veiculo
{
	public function acelerar($acelerar)
	{
		echo "O veiculo acelerou até " . $acelerar . "Km/h";
	}

	public function frenar($acelerar)
	{
		echo "O veiculo frenou até " . $acelerar . "Km/h";
	}

	public function trocarMacha($macha)
	{
		echo "O veiculo esta na macha " . $macha;
	}
}

class DelRey extends Automove
{
	public function empurrar(){

	}
}

$carro = new DelRey;
$carro->acelerar(100);

 ?>