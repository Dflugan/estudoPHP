<?php
namespace Cliente;
class Cadastro extends \Cadastro
{
  public function registroVenda(){
    echo "Venda registrada, cliente " . $this->getNome();
  }
}
 ?>
