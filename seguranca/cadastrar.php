<?php
$email = $_POST['email'];

$ch = curl_init();
$url = "https://www.google.com/recaptcha/api/siteverify";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
  "secret"=> "6LepfkMUAAAAALuy2fk2ExJ9PjvTEeDbSQwCEYSL",
  "response"=>$_POST['g-recaptcha-response'],
  "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$recaptch = json_decode(curl_exec($ch), true);
curl_close($ch);

if($recaptch['success']){
  echo "Email: " . $_POST['email'];
}else {
  header('Location: exemplo-04.php');
}

 ?>
