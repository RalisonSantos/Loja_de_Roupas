<?php
    session_start();

    include(dirname(__DIR__).'/conexao/conexao.php');
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    

    $res = $con->query("SELECT * FROM usuarios where nome =  '$nome' and email = '$email'");
    $res_senha = $con->query("SELECT senha FROM usuarios where nome =  '$nome' and email = '$email'");
    $linha1 = $res->fetch_object();
    $linha2 = $res_senha->fetch_object();
 

    $qtd = $res->num_rows;
    if(password_verify($senha,$linha2->senha) && $qtd > 0){
        $_SESSION["usuario"] = $nome;
        $_SESSION["nome"] = $linha1->nome;
        print "<script>location.href='../usuario/tela_inicial_usuario.php';</script>";
    }else{
        echo "E-mail ou senha incorretos!";
    
    }
?>
