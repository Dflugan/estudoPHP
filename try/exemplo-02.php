<?php
function tratarNome($nome){
  if (!$nome) {
    throw new Exception("Error no envio do nome", 500);
  }
  echo "Seu nome é" . $nome;
}
try {
  tratarNome("");
} catch (Exception $e) {
  echo json_encode(array(
    "message"=>$e->getMessage(),
    "line"=>$e->getLine(),
    "file"=>$e->getFile(),
    "code"=>$e->getCode()
  )). "<br>";
}finally{
  echo "Final do projeto";
}
?>
