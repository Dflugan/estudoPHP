<?php
session_id('maq4drmh6j2rg7skcq5d8vgibb');
require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>