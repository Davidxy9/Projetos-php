<?php
session_start();

if($_SESSION["rip"] == 1){
	}else{
	$_SESSION['entrousemlogar'] = ('Você deve estar logado para continuar');
	header("Location: login.php");
}
?>

<html>
<head>
<link rel="shortcut icon " href="imagens/jot.jpg"/> 
<title>Escolhas</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>          
            body{
                background-image: url(imagens/escolha1.jpg);
                background-attachment:fixed;
				background-repeat:no-repeat;                
                background-size: 100%  
                
            }
	</style>
</head>
<body>

	<div align="center"> 

<br>
		<a class="btn btn-success" href="campos.php">Inserir produto</a>

		<a class="btn btn-success" href="listaprod1.php">Lista dos produtos em ordem crescente de preço</a>
		
		<a class="btn btn-success" href="listaprod2.php">Lista dos produtos em ordem crescente de preço</a>

		<a class="btn btn-success" href="logoff.php">Logoff</a>	
	
</div>
	
</body>
</html>