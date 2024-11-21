<?php
    session_start();

    include(dirname(__DIR__).'/conexao/conexao.php');
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    

    $res = $con->query("SELECT * FROM fornecedores where nome =  '$nome' and email = '$email'");
    $res_senha = $con->query("SELECT senha FROM fornecedores where nome =  '$nome' and email = '$email'");
    $linha1 = $res->fetch_object();
    $linha2 = $res_senha->fetch_object();
 

    $qtd = $res->num_rows;
    if(password_verify($senha,$linha2->senha) && $qtd > 0){
        $_SESSION["usuario"] = $nome;
        $_SESSION["nome"] = $linha1->nome;
        print "<script>location.href='../fornecedor/tela_inicial_fornecedor.php';</script>";
    }else{
        print "<script>location.href='../../html/mensagem_erro_login.html';</script>";
    
    }
?>
