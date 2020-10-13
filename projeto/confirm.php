<?php
session_start();
$nome = $_POST["nome"];
$senha = $_POST["senha"];
if(!isset($_SESSION['user']) && !isset($_SESSION['senhax'])){
    $_SESSION["erro"] = 4;
    header('location: projeto2.php');
}else{
    if(($_POST["usuario"] == $_SESSION['user']) && ($_POST["senha1"] == $_SESSION['senhax'])){
        $_SESSION["logou"] = 1;
        header('location: paineldecontrole.php');
    }
    else{
        $_SESSION["erro"] = 1;
        header('location: projeto2.php');
    
    }
}

?>

