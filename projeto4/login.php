<?php
	session_start();
?>

<html>
<head>
<link rel="shortcut icon " href="imagens/lista.jpg"/> 
<title>Login</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>          
            body{
                background-image: url(imagens/tanjiro.png);
                background-attachment:fixed;
				background-repeat:no-repeat;                
                background-size: 100%  
                
            }
	</style>
</head>

<body>
<font color="red"> 
<?php
	if(isset($_SESSION['naoconseguene']))
	{
		echo "<mark>$_SESSION[naoconseguene]<mark>";
		unset($_SESSION['naoconseguene']);
	}
	elseif(isset($_SESSION['entrousemlogar']))
	{
		echo "<mark>$_SESSION[entrousemlogar]</mark>";
		unset($_SESSION['entrousemlogar']);
	
	}
?>
</font>
	<form action="valida.php" method="POST">
<font color="" face="Palatino Linotype"> 
<b>Usuário:
  <div class="form-group">
	<input type="text" name="usuario1" class="form-control" placeholder="Digite seu usuário">
  </div>
  
Senha:
  <div class="form-group">
    <input type="password" name="senha1" class="form-control"  placeholder="Digite sua senha">
  </div>
  
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</br><br>
Não tem conta?<a href="cadastro2.php" target="_blank"> Registre-se</a><br>
<!--Esqueceu sua senha?<a href="redefinisenha.php" target="_blank"> Mudar a senha</a> -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>