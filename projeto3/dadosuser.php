<?php
	$usuario= $_POST['usuario'];
	$email= $_POST['email']; 
	$senha1 = md5($_POST['senha1']);
	

	$conn = new PDO('mysql:host=localhost;port=3306;dbname=meubanco','root','');

	$inserirdados = $conn ->exec("INSERT INTO usuario (nome,email,senha) VALUES('$usuario','$email','$senha1')");
	
	header("location:login.php");
?>