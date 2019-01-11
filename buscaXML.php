<?php

function get_endereco($cep){
    $cep = preg_replace("/[^0-9]/", "", $cep);
    $url = "https://viacep.com.br/ws/$cep/xml";

    $xml = simplexml_load_file($url);
    return $xml;
}

$endereco = (get_endereco("21020330"));
echo "Rua: $endereco->logradouro"
?>