<?php
require_once("config.php");
session_unset();// limpa as variaveis da sessão
session_destroy();//destroi toda sessão

echo $_SESSION["nome"] . "<br>";
echo $_SESSION["fone"];