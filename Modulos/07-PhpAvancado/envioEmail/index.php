<?php
//para o envio de email seia necessario estar hospedado
//by Kennedy E M Silva
if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);
    $msg = addslashes($_POST["msg"]);

    $para = "kennedyeduardomartins@gmail.com";
    $assunto = "Assunto de teste para envio de email";
    $corpo = "Nome: " . $nome . " - E-mail: " . $email . " - Mensagem: " . $msg;
    $cabecalho = "From: suporte@7web.com.br" . "\r\n" .
            "Replay-To: " . $email . "\r\n" .
            "X-mailer: PHP/" . phpversion();

    mail($para, $assunto, $corpo, $cabecalho);
    exit;
}
?>

<form method="POST">
  Nome:<br>
  <input type="text" name="nome"><br>
  email:<br>
  <input type="email" name="email"><br>
  Mensagem:<br>
  <textarea  name=",sg" rows="5" cols="10"></textarea><br>
  <input type="submit" value="Enviar"><br>
</form>





