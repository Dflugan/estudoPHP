<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 3;
$con = mysqli_connect("localhost", "root", "", "dbphp7");
$sql = "SELECT * FROM tb_usuarios WHERE idusuario= $id";
if (!is_numeric($id) || strlen($id) > 5) {
  echo "vacilao!!!";exit;
}
$exec = mysqli_query($con, $sql);
while ($resultado = mysqli_fetch_object($exec)) {

    echo $resultado->deslogin . "<br>";
}
