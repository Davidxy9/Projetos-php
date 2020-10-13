<html>
<head>
<link rel="shortcut icon " href="imagens/lista.jpg"/> 
    <title>Escolhas</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>          
            body{
                background-image: url(imagens/projeto.png);
                background-attachment:fixed;
				background-repeat:no-repeat;                
                background-size: 100%  
                
            }
	</style>
</head>
</body>

<div align="center"> 

<br>
		<a class="btn btn-success col-2" href="campos2.php">Inserir produto</a>

		<a class="btn btn-success" href="listaprod1.php">Lista dos produtos em ordem crescente de preço</a>
		
		<a class="btn btn-success" href="listaprod2.php">Lista dos produtos em ordem crescente de preço</a>

		<a class="btn btn-success col-2" href="logoff.php">Logoff</a>	
	
</div>
<?php
session_start();

if($_SESSION["semlogar"] == 1){ //para poder entrar
	}else{
    header("Location: login.php");
    $_SESSION['entrousemlogar'] =  //para o texto
    ('Você deve estar logado para continuar');
}
//r=leitura,ponteiro no inicio.
	//w=abre para a escrita,ponteiro no inicio,zera e cria se n existir arquivo.
		
    $arquivo=fopen("contador.txt","r");
    $cont=fread($arquivo,21); //999 999 999 999 999 999
    $cont++; //$cont +=1; cont=cont + 1;
    $arquivo=fopen("contador.txt","w");
    fwrite($arquivo,$cont);
            //onde ele vai //e o que ele vai escrever
    fclose($arquivo);
   
    echo "<br><br><br><br><br><br><br><br><br>
    <center><button type=button class=btn btn-warning>Quantidade de visitantes: $cont</button></center><center><img class=mb-4 src=https://media.giphy.com/media/J6JazAkCVLId91L4yM/giphy.gif>";
   
    // echo "Quantidade de acessos: $cont" 
?>	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
</body>
</html>