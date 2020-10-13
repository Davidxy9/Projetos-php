<?php

try{ //tente fazer a conexão(instrução)
    $conn=new PDO("mysql:host=localhost;dbname=meubanco2","root",""); //faz a conexão com o banco de dados via PDO
}catch(PDOException $e){ //se não deu coloque o erro na varável $e
    echo $e->getMessage(); //retornar a mensagem do  erro
}

?>