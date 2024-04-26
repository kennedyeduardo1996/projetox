<!DOCTYPE html>
<?php
require './config.php';
?>

<html>
  <head>
    <title>Classificados com Bootstrap 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css"/>   
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">

        <a class="navbar-brand" href="./">Classificados</a>
        <ul class="nav justify-content-end">
            <?php
            if (isset($_SESSION["cLogin"]) && !empty($_SESSION["cLogin"])) :
                ?>
              <li class="nav-item">
                  <a class="nav-link disabled" href="#">
                    <?php
            echo $_SESSION["cLogin"];
                ?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="meus-anuncios.php">Meus Anúcios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sair.php">Sair</a>
              </li>

          <?php else: ?>

              <li class="nav-item">
                <a class="nav-link " href="cadastre-se.php">Cadastre-se</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>


          <?php endif; ?>
        </ul>
      </div>
    </nav>
