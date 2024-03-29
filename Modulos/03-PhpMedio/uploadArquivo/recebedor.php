<?php
//by Kennedy E M Silva
//salva em uma variavel que se torna um 
//array pois tem varios dados salvo no arquivo
$arquivo = $_FILES["arquivo"];



if(isset($arquivo["tmp_name"])){
     echo "entrou no if";
//  gera um nome aleatorio para salvar o arquivo que nesse caso temq que ser em jpg
    $nomedoarquivo = md5(time().rand(0,99)).".jpg";
    echo $nomedoarquivo;
//  salva o arquivo na pasto do servidor que ja deve ter sido criada
    move_uploaded_file($arquivo["tmp_name"], "arquivo/".$nomedoarquivo);
    echo "arquivo enviado";
    
//    $nome = addslashes($_POST["nome"]);
//    $email = addslashes($_POST["email"]);
//    $senha = md5(addslashes($_POST["senha"]));
//    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email','$senha');";
//    $pdo->query($sql);
//    
//    header("Location: index.php");
    
}

