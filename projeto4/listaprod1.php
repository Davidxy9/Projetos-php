<?php
$conn = new PDO('mysql:host=localhost;port=3306;dbname=meubanco2','root','');
?>
<html>
	<head>
	<link rel="shortcut icon " href="imagens/lista.jpg"/> 
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>Lista Crescente</title>
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
	<font color="red">
		<center><h1>Lista de Produtos em Ordem Crescente</h1></center>
		</font>
		<?php
		//SQL/como vai selecionar os registros/o que está no banco de dados
		$mostregist= "SELECT * FROM PRODUTO ORDER BY PRECO ASC"; //selecione tudo que está em produto e apresente em ordem crescente
		//seleciona os registros
		$resultado = $conn->prepare($mostregist); //coloca a váriavel que possui  a query, ou seja, que informa como vai ser a seleção
		//executar a variável
		$resultado->execute();

		echo"<br>";	
	echo"<table class=table>";	
	echo"<thead>";	
	echo"<tr>";	  
	//echo"<th scope=col>#</th>";	
	echo"<th scope=col>Nome</th>";	
	echo"<th scope=col>Preço</th>";	
	echo"<th scope=col>Estoque</th>";		
	echo"</tr>";  
	echo"</thead>";
	
		



// aqui em cima do while fica a cabeça da tabela os campos com nome, preço e estoque assim

		while($linhacont = $resultado->fetch(PDO::FETCH_ASSOC)){
			
			//echo "Nome: " . $linhacont ['nome']."<br>";
			//echo "Preço: " . $linhacont ['preco']."<br>";
			//echo "Quantidade em estoque: " . $linhacont ['estoque']."<br><hr>"; 
		
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
