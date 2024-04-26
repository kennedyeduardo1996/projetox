<?php

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
