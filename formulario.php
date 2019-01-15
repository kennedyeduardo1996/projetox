<?php
/**
 * Created by PhpStorm.
 * User: Kennedy
 * Date: 08/01/2019
 * Time: 00:32
 */

if (isset($_POST["email"]) && !empty($_POST["senha"])){
    $email = $_POST["email"];
    echo $email;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="#" method="post">
    email: <br><input name="email" type="email"> <br>
    senha: <br><input name="senha" type="password"> <br>
    <button>Enviar</button>
</form>
</body>
</html>