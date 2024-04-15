<?php
require 'usuario.php';

$user = new Usuario(17);

$user = $user->getNome();
echo $user;

?>