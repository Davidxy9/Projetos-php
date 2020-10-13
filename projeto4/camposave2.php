<?php

   // $sendimg= filter_button(BUTTON_POST,'SendCadImg' FILTER_SANITIZE_STRING);
	$produto=$_POST['produto'];
	$preco=$_POST['preco'];
    $estoque=$_POST['estoque'];
    $nomeimg=$_FILES['imagem']['name'];

	$conn= new PDO('mysql:host=localhost;port=3306;dbname=meubanco2','root','');

	$inserirdados = $conn ->exec("INSERT INTO produto (nome,preco,estoque,imagem) VALUES('$produto','$preco','$estoque','$nomeimg')");
	
	header("location:projeto2.php");	
?> 