<?php
/*
 * Classe Usuarios 
 * 
 * 
 * Função cadastrar($nome, $email, $senha, $telefone)
 * Esse método faz um INSERT no banco na tabela usuarios com os parametros recebidos 
 * caso o email não exista no banco.
 * @param $nome é o nome do usuario a ser cadastrado.
 * @param $email é o email do usuario a ser cadastrado.
 * @param $senha é a senha do usuario a ser cadastrado.
 * @param $telefone é o telefone do usuario a ser cadastrado.
 * @return true caso o cadastro se realizado.
 * @return false caso o cadastro NÃO se realizado.
 * 
 * 
 * Função login($email, $senha)
 * Esse método faz um SELECT no banco buscando o usuario pelos parametros,
 * caso tenha algum retorno no banco é salvo na $_SESSION o nome e o id do usuario.
 * @param $email é o email do usuario a para a consulta no banco.
 * @param $senha é a senha do usuario para a consulta no banco.
 * @return true caso tenha um retorno do banco de dados.
 * @return false caso não seja feito nenhum retorno do banco.
 * 
 * 
 * Função getTotalUsuarios()
 * Esse método faz um SELECT no banco e pega o numero total de usuarios cadastrados.
 * @return int(quantidade de usuarios).
 
 * 
 * @package projetox 
 * @author Kennedy E M Silva <kennedyeduardomartins@gmail.com>
 * 
 */

class Usuarios {

    public function cadastrar($nome, $email, $senha, $telefone) {
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();

        if ($sql->rowCount() == 0) {
            $sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome,"
                    . " email = :email, senha = :senha, telefone = :telefone");

            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->bindValue(":telefone", $telefone);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $senha) {
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION["cLogin"] = $dado["nome"];
            $_SESSION["id"] = $dado["id"];

            return true;
        } else {
            return false;
        }
    }

    public function getTotalUsuarios() {
        $dado = array();
        global $pdo;

        $sql = $pdo->prepare("SELECT COUNT(id) as total_usuarios "
                . "FROM usuarios");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
        }

        return $dado;
    }
}
