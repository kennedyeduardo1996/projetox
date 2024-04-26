<?php

//by Kennedy E M Silva
session_start();
global $pdo;
try {
    $pdo = new PDO("mysql:dbname=classificados;host=127.0.0.1", "root", "");
} catch (Exception $exc) {
    echo "Falha no banco:" . $exc->getTraceAsString();
    exit;
}
?>



