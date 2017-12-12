<?php
$conn = new mysqli("localhost", "root", "", "dbphp7");
if ($conn->connect_error) {
  echo "Erro: " . $conn->connect_error;
}
$query = "INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)";

$stmt = $conn->prepare($query);// stentmente
$login = "Flaaps";
$pass = "142536";
$stmt->bind_param("ss", $login, $pass);
$stmt->execute();
$login = "Dflugann";
$pass = "748596";
$stmt->execute();

?>
