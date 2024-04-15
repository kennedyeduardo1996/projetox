<?php

/*
 * Verificação de email no banco
 * 
 * Esse codigo verifica se o email enviado tem no banco
 * caso tenha no banco sera criado um token que sera enviado para 
 * a proxima pagina onde o usuario ira refefinir uma senha
 * obs: a data esta salvando errado
 * 
 * @package PJesquecisenha
 * @author Kennedy E M Silva <kennedyeduardomartins@gmail.com>
 * 
 * @param $_POST["email"] para a validação do email
 * 
 * return "click aki para redefinir senha"
 * return "Email não cadastrado"
 */


//by Kennedy E M Silva
require './config.php';
if (!empty($_POST["email"])) {
    $email = $_POST["email"];

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":email", $email);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $id = $sql["id"];
        
        $token = md5(time().rand(0, 999).rand(0, 999));
        
        $sql = "INSERT INTO usuarios_token "
                    . "(id_usuario, hash, expirado_em) VALUES (:id_usuario, :hash, :expirado_em)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":id_usuario", $id);
            $sql->bindValue(":hash", $token);
            $sql->bindValue(":expirado_em", date("Y-m-d H:i", strtotime("+2 months")));
            $sql->execute();
            
            echo "<a href='redefinir.php?token=".$token."'>click aki para redefinir senha</a>";
            
        
        
    } else {
        echo "Email não cadastrado";
    }
}
?>
<h1>Adicionar</h1>
<br/>
<br/>
<form method="POST">
  Qual o seu Email: <br/>
  <input type="text" name="email"><br/><br/>

  <input type="submit" value="Enviar">
</form>
