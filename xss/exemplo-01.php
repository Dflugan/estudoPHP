<form  method="post">
  <input type="text" name="buscar" >
    <button type="submit">Enviar</button>
</form>

<?php

$_POST['buscar'] = "<a href='#'><strong>teste</strong></a><script type=>alert('teste')</script>";
if (isset($_POST['buscar'])) {
    echo strip_tags($_POST['buscar'], "<script><a>") . "<br>";
    echo htmlentities($_POST['buscar']);
}
?>
