<?php
/*
*
* Pagina excluir-foto.php 
*
 * Pagina para excluir uma foto de um anúncio onde recebe-se o id por $_GET
*  
 * É feita a requisição do arquivo "config.php".
 * É feita a requisição da classe anuncios anuncios.class.php
* 
*  É feita a verificação se o usuario esta logado $_SESSION["cLogin"] caso não esteja 
 * o mesmo é enviado para a pagina de login.php
 * @param $_SESSION["cLogin"] é nome do usuario caso esteja logado
* 
 * É recebido o id via $_GET e feita a verificação do mesmo e feita a exclusão da imagem 
 * do anuncio pela Função "excluirFoto", após isso é direcionado para "editar-anuncio.php",
 * caso não seja feita a exclusão de nenhuma foto por não existir é dir3ecionado para
 * "meus-anuncios.php".
 */
    

require './config.php';
require './classes/anuncios.class.php';

if (empty($_SESSION["cLogin"])):
    header("Location: login.php");
    exit;
endif;

$a = new Anuncios();
if (isset($_GET["id"]) && !empty($_GET["id"])) :

    $id = addslashes($_GET["id"]);

    $id_anuncio = $a->excluirFoto($id);

endif;

if (isset($id_anuncio)):
    
    header("Location: editar-anuncio.php?id=".$id_anuncio);
else:
    header("Location: meus-anuncios.php");
endif;
?>

