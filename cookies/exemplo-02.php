<?php

if (isset($_COOKIE["testeCookie"])) {
	$resp = json_decode($_COOKIE["testeCookie"]);
}
echo $resp->celular;
 ?>
