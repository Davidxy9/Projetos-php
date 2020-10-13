<?php
 include_once 'saveusers.php';
	
	$consulta= "Select * From dados";//seleciona todas as linhas e colunas da tabela dados
	$con= $mysqli->query($consulta) or die ($mysqli->error); //função de php que vai rodar $consulta no msyql
				
?>
<html>
<body>

<br>
<form action="saveusers.php" method="POST" name="formulario">
Digite seu usuário: <input type='text' name="usuario"><br>
Digite sua senha: <input type='text' name="senha1" id='senha1'><br>
Digite sua nova senha: <input type='text' name="senhanew" id='senhanew'><br><br>
<input type='submit' value="Salvar nova senha" onclick="novasenha()"> 
</form>

	


<script>
        function novasenha(){
           var senha1 = document.getElementById("senha1").value;
           var senhanew = document.getElementById("senhanew").value;
                if(senha1 != senhanew){
                    alert("Senhas incompativeis, tente novamente!");
                        document.formulario.action="redefinisenha.php"
                }
				else{
                        alert("Sua senha foi redefinida");
                    }
        }

</script>
</body>
</html>
