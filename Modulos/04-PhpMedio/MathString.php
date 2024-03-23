<?php

//by Kennedy E M Silva
//Funcao em php
function somarNumero($x, $y) {
    $conta = $x + $y;
    return $conta;
}

$resultado = somarNumero(10, 20);
echo $resultado . "<br><br>";

//função de date
$dataatual = date("d-m-Y \a\s H:i:s");
echo $dataatual . "<br><br>";

//funções matematicas
//retorna o valor absoluto 4
echo abs(-4) . "abs<br>";

//arrendonda baseado no proprio numero, igual a nota
echo round(2.9) . " round<br>";

//arrendonda para cima 
echo ceil(2.2) . " ceil<br>";

//arrendonda para baixo
echo floor(2.6) . " floor<br>";

//gera um numero aleatorio entre os numero
echo rand(1, 100) . " rand<br><br>";

//explode separa e transforma uma string em 
//array separando pelo primeiro parametro imposto
$nome = "Kennedy Eduardo Martins Silva";
$x = explode(" ", $nome);
print_r($x);
//implode junta um array separando-os 
//pelo primeiro parametro imposto
$nomeCompleto = implode(" ", $x);
echo "<br>" . $nomeCompleto . "<br><br>";

//formatar o numero(num, casa pos o ponto,oque vai ficar no ponto, casa do milhar)
$a = number_format(829558528.4566, 2, " , ", " . ");
echo $a . " numero formatado<br>";

//substitui uma uma parte da string
$texto = "O rato roeu a roupa!";
$string = str_replace("roeu", "comeu", $texto);
echo "<br>" . $string . "<br><br>";

//texto tudo maiusculo
echo strtoupper($string) . "<br><br>";

//primeira letra maiusculo de todas as palavras
echo ucwords($string) . "<br><br>";

//pega uma parte da string (string, inicio, qts de letras)
echo substr($string, 2, 4) . "<br><br>";
