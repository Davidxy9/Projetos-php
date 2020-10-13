<html>
<head>
<link rel="shortcut icon " href="imagens/jot.jpg"/> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>          
            body{
                background-image: url(imagens/ab.jpg);
                background-attachment:fixed;
				background-repeat:no-repeat;                
                background-size: 100%  
                
            }
	</style>
</head>
<body>

<!--<form name="produtos" action="camposave.php" method="POST">
<center>Nome: <input type='text' placeholder='Digite o produto' name="produto" class="col-2"/><center>
<center>Preço: <input type='text' placeholder='Digite o preço' name="preco" class="col-3"/></center>
<center>Quantidade: <input type='text' placeholder='Digite o estoque' name="estoque" class="col-3"/><center>
	<button type="submit" class="btn btn-success">Inserir</button>
	</form> -->
	<div align="center">
<font color="Yellow" face="arial">
	<form name="produtos" action="camposave.php" method="POST">
  <div class="form-group col-4"><br><br>
   <label for="formGroupExampleInput"><b>Nome</b></label>
    <input type="text" class="form-control" name="produto" placeholder="Digite o nome do produto">
  </div>
  <div class="form-group col-4">
    <label for="formGroupExampleInput2"><b>Preço</b></label>
    <input type="text" class="form-control" name="preco" placeholder="Digite o preço do produto">
  </div>
  <div class="form-group col-4">
    <label for="formGroupExampleInput2"><b>Estoque</b></label>
    <input type="text" class="form-control" name="estoque" placeholder="Digite a quantidade em estoque"> <br>
	<button type="submit" class="btn btn-primary">Inserir</button>
</form>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>