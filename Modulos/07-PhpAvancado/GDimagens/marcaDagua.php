<?php
//by Kennedy E M Silva

$imagem = "pintura.jpg";


//getimagesize retorna um array com dois valores 
//largura e altura do arquivo
//e o list salva esse dois valores nas duas variaveis
list($largura_original, $altura_original) = getimagesize($imagem);
list($largura_mini, $altura_mini) = getimagesize("mini_imagem.jpg");

//Cria uma imagem sem nenhum conteudo mas com o tamanho correto
$imagem_final = imagecreatetruecolor($largura_original, $altura_original);

//salva na var a imagem original
$imagem_original = imagecreatefromjpeg("pintura.jpg");
$imagem_mini = imagecreatefromjpeg("mini_imagem.jpg");

//pega a $imagem_original e cola em cima do arquivo
// de imagem criado que sta vazio
imagecopy($imagem_final, $imagem_original, 
        0, 0, 0, 0, 
        $largura_original, $altura_original);

//cola a mini imagem em cima da outra como uma marca d'água
imagecopy($imagem_final, $imagem_mini, 
        0, 0, 0, 0, 
        $largura_mini, $altura_mini);

//header("Content-Type: image/jpg");
imagejpeg($imagem_final, "imagem_marca_dagua.jpg", 100);

