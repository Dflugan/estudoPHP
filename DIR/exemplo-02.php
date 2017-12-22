<?php
 $name = scandir("imagens");

  $data = array();

 foreach ($name as $img) {
    if (!in_array($img, array(".", ".."))) {
      $filename = "imagens" . DIRECTORY_SEPARATOR . $img;
      $info = pathinfo($filename);
      $info['size'] = filesize($filename);
      $info['modified'] = date("d/m/y H:i:s", filemtime($filename));
      $info['url'] = "http://localhost:8000/DIR/" . str_replace("\\", "/", $filename);

      array_push($data, $info);
    }
 }
echo json_encode($data);

 ?>
