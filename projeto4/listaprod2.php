<?php
$conn = new PDO('mysql:host=localhost;port=3306;dbname=meubanco2','root','');
?>
<html>
	<head>
	<link rel="shortcut icon " href="imagens/lista.jpg"/> 
		<meta charset="UTF-8">
		<title>Lista Decrescente</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<style>          
            body{
                background-image: url(imagens/pega.jpg);
                background-attachment:fixed;
				background-repeat:no-repeat;                
                background-size: 100%  
                
            }
	</style>
	</head>
	<body>
	<font color="blue">
		<center><h1>Lista de Produtos em Ordem Decrescente</h1></center>
	</font>
		<?php
		//SQL/como vai selecionar os registros/o que está no banco de dados
		$mostregist= "SELECT * FROM PRODUTO ORDER BY PRECO DESC"; //selecione tudo que está em produto e apresente em ordem crescente
		//seleciona os registros
		$resultado = $conn->prepare($mostregist); //coloca a váriavel que possui  a query, ou seja, que informa como vai ser a seleção
		//executar a variável
		$resultado->execute();
		
		echo"<br>";	
		echo"<table class=table>";	
		echo"<thead>";	
		echo "<tr>";	  
		//echo"<th scope=col>#</th>";	
		echo"<th scope=col>Nome</th>";	
		echo"<th scope=col>Preço</th>";	
		echo"<th scope=col>Estoque</th>";		
		echo"</tr>";  
		echo"</thead>";
		




		while($linhacont = $resultado->fetch(PDO::FETCH_ASSOC)){
					
			/*echo "Nome: " . $linhacont ['nome']."<br>";
			echo "Preço: " . $linhacont ['preco']."<br>";
			echo "Quantidade em estoque: " . $linhacont ['estoque']."<br><hr>"; */
		
			
			echo"<tbody>";
			echo"<tr>";
		//	echo"<th scope=row>1</th>";
			echo"<td>". $linhacont ['nome']."</td>";
			echo"<td>". $linhacont ['preco']."</td>";
			echo"<td>". $linhacont ['estoque']."</td>";
			echo"</tr>";
			
			
		echo "</div>";
				 
			}echo "</tbody>";
			echo "</table>";
		
	
		?> 	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	</body>
</html>