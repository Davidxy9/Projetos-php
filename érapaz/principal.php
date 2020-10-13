<html>
<body>
<form name="formulario" action="valida.php" method="POST" onsubmit="return valida()">
	Seu nome <input type='text' name='nome'/><br>
	Sua data de nascimento <input type='text' name='nascimento'/><br>
	Seu email <input type='text' name='email1' id="email1"/><br>
	Confirmação de endereço email <input type='text' name='email2' id="email2"/><br>
	<input type='submit' value='Enviar'>
	</form> 

<script>
	function valida(){
		email1 = document.getElementById('email1').value;
		email2 = document.getElementById('email2').value;
		
	if(email1 != email2){
		alert ('os emails não coincidem');
	return false;}
	
	
	else{
		alert ('Os emails são iguais');
	return true;}
	}
	
</script>

</body>
</html>