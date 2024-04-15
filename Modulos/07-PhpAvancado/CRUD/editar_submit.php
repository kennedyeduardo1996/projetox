<?php
//by Kennedy E M Silva
include './contato.class.php';
$contato = new Contato();

if(isset($_POST["id"]) && !empty($_POST["id"]) && !empty($_POST["email"])){
    $id = $_POST["id"];
    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $contato->editar($id, $email, $nome);
}
    header("Location: index.php");

