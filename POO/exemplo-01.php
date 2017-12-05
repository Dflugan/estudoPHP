<?php 

Class Pessoa {

	public $nome;

	public function falar(){
		return "Meu nome é: " . $this->nome;
	}
}

$flavio = new Pessoa();
$flavio->nome = "Flavio Santos";
$falar =  $flavio->falar();

echo $falar;

 ?>