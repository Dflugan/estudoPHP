<?php
$con = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");
$stmt = $con->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;

$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Delete OK";

 ?>
