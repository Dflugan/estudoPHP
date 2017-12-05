<?php 
class Documento{
	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}
}

class CPF extends Documento{

	public function validar():bool{
		$numeroCPF = $this->getNumero();

		return true;
	}
}

$cpf = new CPF;
$cpf->setNumero('208.231.580-00');
var_dump($cpf->validar()) . "<br/>";
echo $cpf->getNumero();


 ?>