<?php
//by Kennedy E M Silva
include './contato.class.php';
$contato = new Contato();

if(isset($_POST["email"]) && !empty($_POST["email"])){
    $email = $_POST["email"];
    $nome = $_POST["nome"];
    
    $contato->adicionar($email, $nome);
}
    header("Location: index.php");

