<?php
//adiciona o arquivo php que faz a conexao com o banco de dados
require_once './config.php';
$id = 0;

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = addslashes($_GET["id"]);
}
if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);
    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'  ";
    //  enviando o comando para o banco
    $sql = $pdo->query($sql);
    header("Location: index.php");
}


$sql = "SELECT * FROM usuarios WHERE id = '$id'";
//  enviando o comando para o banco
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
//      featch transforma o resultado do banco em array e pega apenas o primeiro resultado da lista
    $dado = $sql->fetch();
} else {
    header("Location: index.php");
}
?>
<form method="POST">
  Nome: <br/>
  <input type="text" name="nome" value="<?php echo $dado["nome"]; ?>"><br/>
  Email: <br/>
  <input type="text" name="email" value="<?php echo $dado["email"]; ?>"><br/>


  <input type="Submit" value="Atualizar">


</form>
