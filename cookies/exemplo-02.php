<?php 

if (isset($_COOKIE['NOME_COOKIES'])) {
	$cookies = json_decode($_COOKIE['NOME_COOKIES'],true) ;
	print_r($cookies['empresa']);
}

 ?>