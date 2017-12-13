<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");
$stmt->execute();

//$data = array();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // array_push($data, $result);
  // echo json_encode($data);//json
foreach ($result as $row) {
  foreach ($row as $key => $value) {
    echo "<strong>". $key ."</strong>" . $value . "<br>";
  }
  echo "===========================================<br>";
}

 ?>
