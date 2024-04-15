<?php

//by Kennedy E M Silva

try {
    $pdo = new PDO("mysql:dbname=pj_esquecisenha;host=127.0.0.1", "root", "");
} catch (PDOException $exc) {
    echo "Falhou:" . $exc->getMessage();
}



