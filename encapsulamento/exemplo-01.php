<?php 

class Pessoa{

	public $nome = "Rasmus Lerdorf";
	private $idade = 49;
	protected $senha = "123456";

	public function validaDados(){
		echo $this->nome .'<br/>';
		echo $this->idade . '<br/>';
		echo $this->senha;
	}

}

$objeto = new Pessoa;
/*echo $objeto->nome . '<br/>';
echo $objeto->senha . '<br/>';
echo $objeto->senha;
*/
$objeto->validaDados();

 ?>