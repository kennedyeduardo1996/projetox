<?php

//by Kennedy E M Silva
//var array 
$grupos = array(1, 2, 3, 4, 5);

$variavel = array(
    "nome" => "Kennedy",
    "sobrenome" => "Silva",
    "idade" => 25,
    "sexo" => "masculino"
);

echo $variavel["nome"];
echo $variavel["idade"] = 28;
echo "<br>";

//comando para exibir um array na tela 
print_r($variavel);
echo "<br>";

//array dentro de array
$produtos = array(
    array(
        "nome" => "a",
        "quantidade" => "1",
        "info" => "1"
    ),
    array(
        "nome" => "b",
        "quantidade" => "2",
        "info" => "2"
    )
);

$produtos[] = array(
    "nome" => "c",
    "quantidade" => "3",
    "info" => "3"
);
print_r($produtos);
