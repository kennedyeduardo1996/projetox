<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pagina de teste1</title>
    <style>
        div {
            width: 200px;
            height: 200px;
            text-align: center;
            margin: auto;
            background-color: green;
            position: relative;
        }

        h1 {
            color: red;
        }


    </style>
</head>
<body>
<div>
    <h1>Pagina para teste 1</h1>
</div>

<?php
$myArray = array("valor1", "valor2", 3);
$variavel = array(
    "nome" => "Kennedy",
    "sobrenome" => "silva",
    "idade" => 22
);
//        array de array
$produtos = array(
    0 => array(
        "nome" => "",
        "quantidade" => "",
        "informações" => ""
    ),
    1 => array(
        "nome" => "",
        "quantidade" => "",
        "informações" => ""
    )
);
//para adicionar um novo produto
$produtos[] = array(
    "nome" => "",
    "quantidade" => "",
    "informações" => ""
);
//para adicionar um novo produto
$produtos[] = "nova posição do array";
print_r($produtos);
echo "<br>";
var_dump($variavel);
?>

</body>
</html>