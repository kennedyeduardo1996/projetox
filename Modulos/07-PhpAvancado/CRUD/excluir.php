<?php

//by Kennedy E M Silva
include './contato.class.php';
$contato = new Contato();

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];
    $contato->excluir($id);
} 
    header("Location: index.php");
