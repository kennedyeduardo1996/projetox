<?php
//adiciona o arquivo php que faz a conexao com o banco de dados
require_once './conexao.php';

//o parametro $pdo se trara da var de conexao com o banco
selectBanco($pdo);

function selectBanco($pdo) {
    $sql = "SELECT * FROM posts";
//  enviando o comando para o banco
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) {
        echo "<br>Ouve um retorno<br>";
//      featchAll tranforma o resultado do banco em array
        foreach ($sql->fetchAll() as $resultado) {
            echo "<br>Resultado: " . $resultado["titulo"];
        }
    } else {
        echo "Não teve retorno de nenhum cadastro";
    }
}

function insertBanco($pdo) {
    $senhaOriginal = "123";
    
    $nome ="nome teste 2";
    $email="emailteste2@gmail.com";
    $senha= CriptofiaDeSenha($senhaOriginal);
   
    $sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha');";
//  enviando o comando para o banco
    
    $sql = $pdo->query($sql);
    
//    retorna o id do que foi adicionado no banco
    echo "Usuario Inserido: " .$pdo->lastInsertId();
}

function atualizandoBanco($pdo) {
    $email="atual@gmail.com";
    $sql = "UPDATE usuarios SET email = :email WHERE id = 2";
//  enviando o comando para o banco
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->execute();
}

function deletandoDadosBanco($pdo) {
    $email="atualizando@gmail.com";
    $sql = "DELETE FROM usuarios  WHERE id = 3";
//  enviando o comando para o banco
    $pdo->query($sql);

}


//by Kennedy E M Silva

function iniciarSessao() {
    //apos a sessao ser iniciada ela fica aberta até fechar o navegador então na
    // $_SESSION["teste"] continuará com valor até o navegador ser fechado
    session_start();
    $_SESSION["teste"] = "Kennedy Eduardo<br>";
    $_SESSION["testearray"] = array("nome" => "Kennedy", "idade" => 25, "cidade" => "Patrocinio");

    echo $_SESSION["teste"];
    print_r($_SESSION["testearray"]);
}

function criandoCookie() {
    //foi criado um cookie onde vai existir por uma hora(3600)
    //ou até o usuario limpar os cookies do computador, é parecido com a sessao
    setcookie("cookieteste", "Kennedy cookie", time() + 3600);
    echo $_COOKIE["cookieteste"];
}

//Criptografar a senha
function CriptofiaDeSenha($senhaOriginal) {
    $senha = "123456789";
    //criptografia irreversivel
    $senhaCripIrrevers = md5($senhaOriginal);

    //criptografia reversivel
    $senhaCrptRevers = base64_encode($senha);
    //revertendo criptografia
    $senhaCrptRevers = base64_decode($senhaCrptRevers);

    //Para proteger os dados do banco, ao receber uma dado fazer da seguinte maneira
//    $autor = addcslashes($_POST["autor"]);
//    $sql = "SELECT * FROM posts WHERE autor =" . $autor;
    return $senhaCripIrrevers;
}
