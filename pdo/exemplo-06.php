<?php
$con = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$con->beginTransaction();

$stmt = $con->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);
$stmt->execute();

//$con->rollback();
$con->commit();

echo "Delete OK";

 ?>
