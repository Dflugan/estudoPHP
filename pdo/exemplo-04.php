<?php
$con = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");
$stmt = $con->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
$login = "Gabriel";
$password = 'qwerty';
$id = 5;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Update OK";

 ?>
