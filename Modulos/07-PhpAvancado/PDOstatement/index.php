<?php

//by Kennedy E M Silva

require './usuarios.php';

$u = new Usuarios();

$result = $u->selecionar(17);

echo "<pre>";
print_r($result);
echo "</pre>";
echo "</br>";

$u->excluir(11);