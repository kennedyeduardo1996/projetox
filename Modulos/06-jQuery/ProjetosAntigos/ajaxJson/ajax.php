<?php

//echo json_encode($_POST);

$p = $_POST;
$p['qt_nome'] = strlen($_POST["nome"]);
echo json_encode($p);

