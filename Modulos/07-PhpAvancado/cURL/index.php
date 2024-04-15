<?php
//by Kennedy E M Silva
//essa é uma biblioteca responsalvel 
//por fazer requisição em outros sites

//inica a biblioteca
$ch = curl_init();

//o link desse servidor esta fora do ar
curl_setopt($ch, CURLOPT_URL, 
        "http://www.checkitout.com.br/wb/pingpong");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 
        "nome=Kennedy&idade=28&sexo=masculino");

//pega o resultado retornado da url
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($ch);
curl_close($ch);

print_r($ch);

