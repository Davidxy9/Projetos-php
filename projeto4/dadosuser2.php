<?php
	$usuario= $_POST['usuario'];
	$email= $_POST['email']; 	
	$senha1= $_POST['senha']; //recebe o valor inserido no cadastro
    $senha2 = base64_encode($senha1); //codifica o valor inserido no cadastro
	$conn = new PDO('mysql:host=localhost;port=3306;dbname=meubanco2','root',''); //conecta com o banco de dados

	$inserirdados = $conn ->exec("INSERT INTO usuario (nome,email,senha) VALUES('$usuario','$email','$senha2')"); //insere no banco de dados
	
	header("location:login.php");
?>