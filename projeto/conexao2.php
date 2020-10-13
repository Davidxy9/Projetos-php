<?php
	$conn = new PDO('mysql:host=localhost;port=3306;dbname=meubanco','root','');

	$inserirdados = $conn ->exec("INSERT INTO dados (nome,email,senha) VALUES(
?>