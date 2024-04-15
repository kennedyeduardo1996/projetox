<?php

class Usuario {

    private $id;
    private $email;
    private $senha;
    private $nome;
    
    private $pdo;

//    ao instanciar a classe será passado um id onde sera 
//    verificado no banco se o mesmo existe caso exista e 
//    as aspas vazias significam que não é obrigatório o paramentro 

    public function __construct($i = "") {
        try {

            $this->pdo = new PDO("mysql:dbname=blog;host=127.0.0.1", "root", "");
        } catch (PDOException $e) {
            echo "FALHOU: " . $e->getMessage();
        }

        if (!empty($i)) {
            $sql = "SELECT * FROM usuarios WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($i));

            if ($sql->rowCount() > 0) {
                $data = $sql->fetch();
                $this->id = $data['id'];
                $this->email = $data['email'];
                $this->senha = $data['senha'];
                $this->nome = $data['nome'];
            }
        }
    }

    public function getId() {
        return $this->id;
    }

    public function setEmail($e) {
        $this->email = $e;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setSenha($s) {
        $this->senha = md5($s);
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function getNome() {
        return $this->nome;
    }

    public function salvar() {
//        se o id passado ao instanciar a classe for 
//        existente no banco então Irá entrar nesse update
        if (!empty($this->id)) {
            $sql = "UPDATE usuarios SET 
				email = ?, 
				senha = ?, 
				nome = ? 
				WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array(
                $this->email,
                $this->senha,
                $this->nome,
                $this->id));
//        se o id passado ao instanciar a classe NÃO for 
//        existente no banco então vai entao no INSERT           
        } else {
            $sql = "INSERT INTO usuarios SET 
				email = ?, 
				senha = ?, 
				nome = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array(
                $this->email,
                $this->senha,
                $this->nome));
        }
    }

    public function delete() {
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $sql = $this->pdo->prepare($sql);
        $sql->execute(array($this->id));
    }
}

?>