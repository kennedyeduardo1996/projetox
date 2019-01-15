<?php
/**
 * Array
 */

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


/**
  *Constante
*/
define("CONSTANTE", "ValorX");

?>

