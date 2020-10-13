<?php
session_start();
$_SESSION['user'] = $_POST['usuario'];
$_SESSION['senhax'] = $_POST['senha1'];
header('location: projeto2.php');

?>
