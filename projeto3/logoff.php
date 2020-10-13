<?php
session_start();
    unset($_SESSION['rip']);
    header("location:login.php");
    session_destroy();
    
?>