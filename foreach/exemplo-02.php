<form>
    <input type="text" name="nome">
    <input type="date" name="data">
    <input type="submit" value="ok">
</form>

<?php

foreach ($_GET as $key => $value){
    echo "Nome do campo é: $key <br>";
    echo "Valor do campo é: $value <br><br>";
}

?>