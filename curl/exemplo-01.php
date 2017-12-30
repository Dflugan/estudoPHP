<?php
$cep = "06380170";
$url = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response,true);

// $rua = $data->logradouro;
// echo $rua . "<br>";

echo $data['logradouro'] . "<br>";

print_r($data);



 ?>
