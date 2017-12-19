<?php
$con = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");
$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE (:LOGIN, :PASSWORD)");
$login = "Flavio";
$password = 123456;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();

echo "Insert OK";

 ?>
