<?php

$filename = "usuarios.csv";
if (file_exists($filename)) {

    $file = fopen($filename, "r");
    $haders = explode(",",fgets($file));

    $data = array();
    while ($row = fgets($file)) {
      $rowData = explode(",",$row);
      $linha = array();
      for ($i=0; $i < count($haders); $i++) {
         $linha[$haders[$i]]= $rowData[$i];
      }
      array_push($data, $linha);
    }
    fclose($file);

    echo json_encode($data);
}

 ?>
