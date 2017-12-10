<?php
require_once('config.php');
use Cliente\Cadastro;

$cad = new Cadastro;
$cad->setNome('Flavio');
$cad->setEmail('flavioanalistadesistema@gmail.com');
$cad->setSenha('123');

$cad->registroVenda();

 ?>
