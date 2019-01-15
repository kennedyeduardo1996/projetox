<?php
/**
 * Created by PhpStorm.
 * User: by Kennedy
 * Date: 08/01/2019
 * Time: 00:46
 */

$x = 1;

switch ($x) {
    case 0:
        echo "O valor de x eh 0 ";
        break;
    case 1:
        echo "O valor de x eh 1 ";
        break;
    case 2:
        echo "O valor de x eh 2 ";
        break;
   case 3:
   case 4:
   case 5:
        echo "O valor de x eh 3 ou 4 ou 5 ";
        break;
    default:
        echo "não eh nenhum das anteriores";
        break;

}