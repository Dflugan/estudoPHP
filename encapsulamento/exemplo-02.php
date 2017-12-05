<?php 

class Pessoa{

	public $nome = "Rasmus Lerdorf";
	protected $idade = 49;
	private $senha = "123456";

	public function validaDados(){
		echo $this->nome .'<br/>';
		echo $this->idade . '<br/>';
		echo $this->senha;
	}

}

class Programador extends Pessoa{

	public function validaDados(){
		echo get_class($this) . '<br/>';
		echo $this->nome .'<br/>';
		echo $this->idade .'<br/>';
		echo $this->senha;
	}


}
$objeto = new Programador;
$objeto->validaDados();

 ?>