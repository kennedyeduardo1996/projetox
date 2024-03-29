<?php
//by Kennedy E M Silva
session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    echo "Area restrita<br>";
    
}else{
    header("Location: login.php");
}
