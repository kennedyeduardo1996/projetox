<?php

require './environment.php';
$config = array();

if (ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/projetox/Modulos/09-PhpSuperAvancado/EstruturaMVC/");
    $config["dbname"] = "estrutura_mvc";
    $config["host"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
} else {
        define("BASE_URL", "http://meusite.com.br/");
    $config["dbname"] = "estrutura_mvc";
    $config["host"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
}

global $bd;
try {
    $bd = new PDO(
            "mysql:dbname=" . $config["dbname"] . ";host=" .
            $config["host"], $config["dbuser"], $config["dbpass"]);
} catch (PDOException $exc) {
    echo"Erro na conexão com banco: " . $exc->getMessage();
}





