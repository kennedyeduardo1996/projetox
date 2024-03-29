<?php
//adiciona o arquivo php que faz a conexao com o banco de dados
require_once './config.php';
session_start();

if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $email = addslashes($_POST["email"]);
    $senha = md5(addslashes($_POST["senha"]));

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
//  enviando o comando para o banco
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) {
//      featch transforma o resultado do banco em array e pega apenas o primeiro resultado da lista
        $dado = $sql->fetch();

        $_SESSION['id'] = $dado["id"];
        header("Location: index.php");
    }
}
?>


<!--by Kennedy E M Silva-->
<form method="POST">

  Email: <br/>
  <input type="text" name="email"><br/>
  Senha: <br/>
  <input type="password" name="senha"><br/>

  <input type="Submit" value="Entrar">


</form>