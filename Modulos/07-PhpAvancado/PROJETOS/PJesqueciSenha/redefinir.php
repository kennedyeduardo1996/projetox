<?php
//by Kennedy E M Silva
require './config.php';
if (!empty($_GET["token"])) {

    $token = $_GET["token"];

    $sql = "SELECT * FROM usuarios_token WHERE hash = :hash "
            . "AND ativo = 1 ";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":hash", $token);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $id = $sql["id_usuario"];


        if (!empty($_POST["senha"])) {
     
            $senha = md5($_POST["senha"]);

            $sql = "UPDATE usuarios SET senha = :senha WHERE id = :id";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":senha", $senha);
            $sql->bindValue(":id", $id);
            $sql->execute();
            echo 'senha atualizada';

            $sql = "UPDATE usuarios_token SET ativo = 0 WHERE hash = :hash";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":hash", $token);
            $sql->execute();
        }
        ?>
        <form method="POST">
          Nova senha: <br/>
          <input type="text" name="senha"><br/><br/>

          <input type="submit" value="Atualizar">
        </form>
        <?php
    } else {
        echo "Token invalido ou expirado";
    }
}    