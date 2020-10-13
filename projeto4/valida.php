<?php
    session_start();
    
    include_once("conexao.php");

    $usuario1= $_POST['usuario1'];
    $senha1= $_POST['senha1'];
    

   // $busca_user="SELECT * FROM usuario WHERE nome='$usuariol' && senha='$senha2'";
    $buscabanco=$conn->query("SELECT * FROM usuario");
    if($buscabanco){
        foreach($buscabanco as $linha){
            $senha2 = $linha['senha'];
        }
    }
    $senhadec= base64_decode($senha2);

    if($_POST['usuario1'] == $linha['nome'] && $senha1 == $senhadec){
        $_SESSION["semlogar"] = 1;
        header("location:projeto2.php");
    
    }else{
        $_SESSION['naoconseguene'] = 
        ('Usuário ou senha incorretos');
        header("location:login.php");
    }    

  

?>