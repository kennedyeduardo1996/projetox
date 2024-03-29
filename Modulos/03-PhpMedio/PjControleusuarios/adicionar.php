<?php
//<!--by Kennedy E M Silva-->
//adiciona o arquivo php que faz a conexao com o banco de dados
require_once './config.php';
if(isset($_POST["nome"]) && !empty($_POST["nome"])){
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);
    $senha = md5(addslashes($_POST["senha"]));
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email','$senha');";
    $pdo->query($sql);
    
    header("Location: index.php");
    
}

?>
<form method="POST">
  Nome: <br/>
  <input type="text" name="nome"><br/>
  Email: <br/>
  <input type="text" name="email"><br/>
  Senha: <br/>
  <input type="password" name="senha"><br/>

  <input type="Submit" value="Cadastrar">


</form>



