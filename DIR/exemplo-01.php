<?php
 $name = "imagens";
  if(!is_dir($name)){
   mkdir($name);
   echo "Criou novo arquivo $name";
 }else {
   rmdir($name);
   echo "Arquivo $name já existe. Foi removido";
 }

 ?>
