<?php

/*
 * Classe Categorias 
 * 
 * Função getListaCategorias()
 * Esse método faz um SELECT no banco e pega o todas as categorias .
 * @return array() com as categorias cadastradas no banco.
 * 
 * @package projetox 
 * @author Kennedy E M Silva <kennedyeduardomartins@gmail.com>
 * 
 */

class Categorias {

    public function getListaCategorias() {
        global $pdo;
        $sql = "SELECT * FROM categorias";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll();
        }
        return $dados;
    }
}
