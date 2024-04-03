<?php

//by Kennedy E M Silva
//esse preojeto ira pegar uma imagem e redimencionar ela para um tamanho menor

$arquivo = "pintura.jpg";
//original largura = 5600; altura = 3200;
$largura = 200;
$altura = 200;

//getimagesize retorna um array com dois valores 
//largura e altura do arquivo
//    e o list salva esse dois valores nas duas variaveis
list($largura_original, $altura_original) = getimagesize($arquivo);

//proporcao da largura e altura
//se a largura for maior entao vai dar (1,alguma coisa)
$ratio = $largura_original / $altura_original;
//echo $ratio;

if ($largura / $altura > $ratio) {
//    isso ira definir a largura na proporcao correta
    $largura = $altura * $ratio;
} else {
    $altura = $largura / $ratio;
}

echo "<br>Largura: " . $largura . " *  Altura: $altura";
echo "<br>Largura original: " . $largura_original . " *  Altura: $altura_original";
echo "<br>";

//php GD 
//Cria uma imagem sem nenhum conteudo mas com o tamanho correto
$imagem_final = imagecreatetruecolor($largura, $altura);

//salva na var a imagem original
$imagem_original = imagecreatefromjpeg($arquivo);

//esse comando pai pegar a imagem original ee passar para o tamanho novo
imagecopyresampled($imagem_final, $imagem_original,
        0, 0, 0, 0,
        $largura, $altura, $largura_original, $altura_original);

//o navegador vai interpretar que esse arquivo(index.php) é uma imagem
header("Content-Type: image/jpeg");

imagejpeg($imagem_final, "nova.jpg", 75);


