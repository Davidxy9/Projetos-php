<?php
include_once 'conexao.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de usuários</title>
	</head>
	<body>
		<center><h1>Lista de usuários cadastrados</h1></center>
		<?php
		//SQL/como vai selecionar os registros/o que está no banco de dados
		$mostregist= "SELECT * FROM users ORDER BY id ASC"; //selecione tudo que está em users e apresente em ordem crescente
		//seleciona os registros
		$resultado = $conn->prepare($mostregist); //coloca a váriavel que possui  a query, ou seja, que informa como vai ser a seleção
		//executar a variável
		$resultado->execute();
		
		while($linhacont = $resultado->fetch(PDO::FETCH_ASSOC)){
			echo "ID: " . $linhacont ['id']."<br>";
			echo "Nome: " . $linhacont ['nome']."<br>";
			echo "Telefone: " . $linhacont ['telefone']."<br>";
			echo "Email : " . $linhacont ['email']."<br><hr>";
		}
		?> 	
	<a href="http://localhost/sistema/index.html">Desejo Cadastrar um novo usuário</a>
	</body>
</html>