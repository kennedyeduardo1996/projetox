<?php

$_POST["qt_nome"] = strlen($_POST["nome"]);
//retorna o resultado em json
echo json_encode($_POST);
