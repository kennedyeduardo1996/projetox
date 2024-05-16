<?php
/*
*
* Pagina sair.php 
*
 * Pagina para fazer logout do usuario.
 * 
 * É iniado a sessao, é apagado a sessao criada e feito redirecionamento para a pagina inicial. 
 * 
 */
session_start();
unset($_SESSION["cLogin"]);
header("Location: ./");


