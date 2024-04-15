<?php

Class Usuarios {

    private $bd;

    public function __construct() {

        try {
            $this->bd = new PDO("mysql:dbname=blog;host=127.0.0.1", "root", "");
        } catch (PDOException $exc) {
            echo "Falhou:" . $exc->getMessage();
        }
    }

//  1ª forma de usar o PDOstatement
    public function selecionar($id) {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $sql = $this->bd->prepare($sql);
//        o "bindValue" associa o valor da variavel no
//         momento que foi passado nesse paramentro então mesmo que o 
//         valor da var venha mudar depois isso não fará diferença
        $sql->bindValue(":id", $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            return $dado;
        }
        return array();
    }

//  2ª forma de usar o PDOstatement
    public function inserir($nome, $email, $senha) {

        $senha = md5($senha);
        $sql = "INSERT INTO usuarios "
                . "(nome, email, senha) VALUES (:nome, :email, :senha)";
        $sql = $this->bd->prepare($sql);
        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":senha", $senha);
//            o "bindParam" poderia mudar o valor da var "$nome" e colocar por ex
//            $nome = "mudei o nome";
//            e por trocar o valor antes do "execute()" então o novo valor seria trocado
//            mas se fosse no "bindValue" não funcionaria trocar
        $sql->execute();

        return true;
    }

//  3ª forma de usar o PDOstatement
    public function atualizar($email, $nome, $senha, $id) {


        $sql = "UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?";
        $sql = $this->bd->prepare($sql);
        $sql->execute(array($nome, $email, md5($senha), $id));

        return true;
    }

//  4ª forma de usar o PDOstatement
    public function excluir($id) {
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $sql = $this->bd->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
        return true;
    }
}
