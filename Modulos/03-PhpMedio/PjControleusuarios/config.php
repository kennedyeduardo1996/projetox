<?php

//by Kennedy E M Silva

//var com os dados de conexao com o banco de dados
$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

//  onde a conexao com o banco é realizada
try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $exc) {
    echo "Falhou a conexao com banco:" . $exc->getMessage();
}



