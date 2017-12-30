<?php
$data = array(
  "celular" => "nokia",
  "Notebook"=> "Hp1900"
);
setcookie("testeCookie", json_encode($data, time() + 360));

echo "ok, cookie gravado";
 ?>
