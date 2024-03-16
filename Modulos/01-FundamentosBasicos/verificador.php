<?php

//by Kennedy E M Silva

$nome = "kennedy";
$idade = 25;

if ($nome == "kennedy" || $idade == 65) {
//if ($nome == "kennedy" && $idade == 25) {
    echo "entrou no primeiro if";
} else {
    echo "entrou no else";
};

echo "<br><br><br><br><br>";

$x =3;

switch ($x) {
    case 0:
        echo "O x eh zero";
        break;
    case 1:
        echo "O x eh um";
        break;
    // é para isso que serve o break;
    case 2:
    case 3:
        echo "O x eh dois ou tres";
        break;
    default:
        echo "O x nao eh nenhuma das opcao";
        break;
};






