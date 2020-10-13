<?php

	$produto=$_POST['produto'];
	$preco=$_POST['preco'];
	$estoque=$_POST['estoque'];

	$conn = new PDO('mysql:host=localhost;port=3306;dbname=meubanco','root','');

	$inserirdados = $conn ->exec("INSERT INTO produto (nome,preco,estoque) VALUES('$produto','$preco','$estoque')");
	
	header("location:projeto.php");	
?> 