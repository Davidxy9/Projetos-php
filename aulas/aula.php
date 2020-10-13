<?php

	$conexao = mysqli_connect("localhost","root","");
	mysqli_select_db($conexao,"meudb");
	mysqli_query($conexao,"
		INSERT INTO pessoas
		(nome)
		VALUES
		('jose')
		");
?>