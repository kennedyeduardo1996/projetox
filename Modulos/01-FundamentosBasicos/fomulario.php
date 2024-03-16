<?php
//isset verifica se foi recebido ou seja so enviar ja recebe
//e empty retorna true se estiver vazia ou seja
//caso eu apenas envie sem nada ele não vai entrar nessa condição
if (isset($_POST["email"]) && empty($_POST["email"]) == false) {

    // !empty mesmo significado mas envertido
    if (isset($_POST["senha"]) && !empty($_POST["senha"])) {
        $usuario = $_POST["email"];
        $senha = $_POST["senha"];
        //cria um arquivo txt para guardar dados
        file_put_contents("salvar.txt", $usuario." - ".$senha."//", FILE_APPEND);
        
//     redireciona para a pagina em questão 
//     evitando reenviar os dados novamente
        header("Location: fomulario.php");
    };
};

//isso retorna true
if (empty(0)) {
    echo "Variable 'a' is empty.<br>";
};
?>


<form method="POST">
  E-mail:<br>
  <input type="text" name="email"/><br>
  Senha:<br>
  <input type="password" name="senha"/><br>
  <input type="submit" name="Enviar"/><br>
</form>
