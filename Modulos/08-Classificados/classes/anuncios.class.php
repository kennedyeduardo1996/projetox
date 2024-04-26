<?php

//by Kennedy E M Silva
class Anuncios {

    public function getMeusAnuncios() {
        global $pdo;
        $sql = $pdo->prepare("SELECT *,"
                . "(select anuncios_imagens.url from anuncios_imagens "
                . "where anuncios_imagens.id_anuncio = anuncios.id limit 1) as imagem "
                . "FROM anuncios WHERE id_usuario = :id_usuario");
        $sql->bindValue(":id_usuario", $_SESSION["id"]);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll();
            return $dados;
        } else {
            return array();
        }
    }
    
    public function MeuAnuncio($id) {
                global $pdo;
        $sql = $pdo->prepare("SELECT *"
                . "FROM anuncios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            return $dado;
        } else {
            return array();
        }
    }
    
    
    

    public function adicionarAnuncio($categoria, $titulo, $valor, $descricao, $estado) {
        global $pdo;
        $sql = $pdo->prepare("INSERT INTO anuncios SET id_usuario = :id_usuario,"
                . " id_categoria = :id_categoria, titulo = :titulo, descricao = :descricao,"
                . " valor = :valor,  estado = :estado");

        $sql->bindValue(":id_usuario", $_SESSION["id"]);
        $sql->bindValue(":id_categoria", $categoria);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":estado", $estado);

        $sql->execute();
    }
    
    
    public function excluirAnuncio($id) {
                global $pdo;
                
        $sql = $pdo->prepare("DELETE FROM anuncios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        $sql = $pdo->prepare("DELETE FROM anuncios_imagens WHERE id_anuncio = :id_anuncio");
        $sql->bindValue(":id_anuncio", $id);
        $sql->execute();
    }
}
