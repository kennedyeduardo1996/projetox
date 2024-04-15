<?php

//by Kennedy E M Silva
class Contato {

    private $pdo;

    public function __construct() {

        try {
            $this->pdo = new PDO("mysql:dbname=crudob;host=127.0.0.1", "root", "");
        } catch (PDOException $exc) {
            echo "Falhou:" . $exc->getMessage();
        }
    }

//    o nome é opcional no banco
    public function adicionar($email, $nome = "") {
        // verifcar se email existe
        if ($this->existeEmail($email) == false) {
            $sql = "INSERT INTO contatos "
                    . "(nome, email) VALUES (:nome, :email)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    public function getContato($id) {
        $sql = "SELECT * FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            return $dado;
        }
        return array();
    }

    public function getAll() {
        $sql = "SELECT * FROM contatos";
        $sql = $this->pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll();
            return $dados;
        } else {
            return array();
        }
    }

    private function existeEmail($email) {

        $sql = "SELECT email FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //    o nome é opcional no banco
    public function editar($id, $email, $nome = "") {
        // verifcar se email existe
        if ($this->existeEmail($email) == false) {

            $sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":id", $id);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    public function excluir($id) {
        $sql = "DELETE FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        return true;
    }
}
