<?php

   // $cep = preg_replace("/[^0-9]/", "", $cep);
   
   $cep = '21020330';
    $url = "https://viacep.com.br/ws/$cep/json";
    
    $client = curl_init($url);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($client);

    $result = json_decode($response);
  
   echo $result->logradouro;
   
  
?>