<?php 

interface Veiculo
{
	public function acelerar($acelerar);
	public function frenar($acelerar);
	public function trocarMacha($macha);
}

class Civic implements Veiculo
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

$carro = new Civic;
$carro->acelerar(50);
echo "<br/>";
$carro->frenar(40);
echo "<br/>";
$carro->trocarMacha(3);

 ?>