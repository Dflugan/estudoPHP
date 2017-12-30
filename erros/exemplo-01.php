<?php
function erros_padrao($code, $message, $file, $line){
  echo json_encode(array(
    "code"=>$code,
    "message"=>$message,
    "file"=>$file,
    "line"=>$line
  ));
}

set_error_handler("erros_padrao");
echo $triste;//nao existe variavel TRISTE

 ?>
