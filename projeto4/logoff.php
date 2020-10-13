<?php
session_start();
    unset($_SESSION['semlogar']);
    header("location:login.php");
    session_destroy();
    
?>