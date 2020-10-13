<html>
<body>
<?php
    session_start();
    if(isset($_SESSION['entrar'])){
        $_SESSION['falha'] = 1;
        header('location: projeto2.php');
    }
?>

<h1> Crie um novo usuário: </h1>
<form name="formulario" action="saveusers.php" method="POST" onsubmit="return validar()">
Usuário: <input type='text' name='usuario'/>
Senha: <input type='text' name='senha1' id='senha1' />
Redigite sua senha: <input type='text' name='senha2' id='senha2'/>
<input	 type='submit' value='Registrar'>  
</form>
<script>
	function validar(){
		senha1 = document.getElementById('senha1').value;
		senha2 = document.getElementById('senha2').value;
		
	if(senha1 != senha2){
		alert ('As senhas não coincidem');
	return false;}
	
	
	else{
		alert ('Usuário registrado com sucesso!');
	return true;}
	}
</script>
</body>
</html>