<html>
<head>
<link rel="shortcut icon " href="imagens/lista.jpg"/> 
<title>Cadastro</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>          
            body{
                background-image: url(imagens/a.png);
                background-attachment:fixed;
				background-repeat:no-repeat;                
                background-size: 100%  
                
            }
	</style>

</head>
<body>
    <div style="background-color:rgb(0, 0, 0,0.3);">
<font color="white"> 
<div align="center">
<form name="formulario" action="dadosuser2.php" method="POST" onsubmit="return validar()" class="form-signin">
  <div class="text-center mb-4">
    <img class="mb-4" src="https://tenor.com/view/nezuko-kamado-tanjirou-kamado-bored-gif-14218837.gif" alt="" width="72" height="72">
    <h3 class="h3 mb-3 font-weight-normal"><b><mark>Crie um novo usuário</mark></b></h3>
    </font>
  </div>
  <font color="white"> 
  <div class="form-label-group col-2">
   <label for="inputtext">Usuário</label>
	<input type="text" id="usuario" name="usuario" class="form-control" placeholder="Digite seu usuário"  required autofocus>
    
  </div>

  <div class="form-label-group col-2">
     <label for="inputEmail">Email</label>
	 <input type="text" id="email" name="email" class="form-control" placeholder="Digite seu email" required autofocus>
  
  </div>

  <div class="form-label-group col-2">
    <label for="inputPassword">Senha</label>
	<input type="password" id='senha1' name="senha" class="form-control" placeholder="Digite sua senha" required>
    
  </div>

  <div class="form-label-group col-2">
    <label for="inputPassword">Confirmar senha</label>
	<input type="password" id='senha2' name="senha2" class="form-control" placeholder="Redigite sua senha" required>
  <br>
  </div>
  <style>
            .pequeno {
                height: 5%;
                width: 8%;
            }

            .medio {
                width: 50%;
            }
        </style>    
<p>Caso já seja um usuário:<a class="btn btn-lg btn-primary pequeno btn-block " href="http://localhost/projeto4/login.php"><font size="2">Faça login</font></a></center> <br>
  <!--<p>Caso já seja um usuário: <a href="http://localhost/projeto4/login.php"><b>Faça login.</b></a></p> -->
          
  </div>
  </font>
 <center> <button class="btn btn-lg btn-primary btn-block col-2" type="submit">Cadastre-se</button> </center>
          </br></br></br>
  
</form>
</div>

<!--<h1> Crie um novo usuário: </h1>
<form name="formulario" action="dadosuser.php" method="POST" onsubmit="return validar()">
Usuário: <input type='text' name='usuario'/>
Email:<input type='text' name='email'/>
Senha: <input type='password' name='senha1' id='senha1' />
Redigite sua senha: <input type='password' name='senha2' id='senha2'/>
<input	 type='submit' value='Registrar'>  
</form> -->
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div>

</body>
</html>