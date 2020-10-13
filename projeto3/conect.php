<?php
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "meubanco";

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if(!$conn){
		die("Falha na conexão");
	}else {
		
	}

?>