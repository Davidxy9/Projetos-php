<?php

	session_start();
	
	include_once("conect.php");
	
	
	$usuario = $_POST['usuario'];
	$senha1 = md5($_POST['senha1']);
	
	
	$naoquerotbl = "SELECT * FROM usuario WHERE nome = '$usuario' && senha = '$senha1'";
	$praquevoutbl = mysqli_query($conn, $naoquerotbl);
	$aff = mysqli_fetch_assoc($praquevoutbl);

	if(empty($aff)){
		$_SESSION['emorreu'] = 
        ('Usuário ou senha incorretos');
	header("Location:login.php");

	}elseif(isset($aff)){
		$_SESSION["rip"] = 1;
	header("Location: projeto.php");

	}else{
		$_SESSION['emorreu'] = ('Usuario ou senha incorretos');
	header("Location: login.php");
	}
	
	
	
?>