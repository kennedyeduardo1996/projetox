<?php

//metodos para carregar qualquer arquivo de classe automaticamente ao ser instanciada.
spl_autoload_register(function ($class) {
    require 'classes/' . $class . ".class.php";
});

$user = new Pessoa();
$user->dadosPessoais();
