<?php
include_once 'conexao.php';
	
	$nome= $_POST["nome"];
	$telefone=$_POST["telefone"];
	$email=$_POST["email"];

	//inserir no banco de dados com identificadores
	$result="INSERT INTO users(nome,telefone,email) VALUES(:nome,:telefone,:email)";
	
	$insert = $conn->prepare($result);
	$insert->bindParam(':nome',$nome);
	$insert->bindParam(':telefone',$telefone);
	$insert->bindParam(':email',$email);
	
	$insert->execute();

	header("location:lista_usuarios.php");
	
?>
