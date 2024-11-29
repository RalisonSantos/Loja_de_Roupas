<?php
    $email = $_POST["email"];

    include(dirname(__DIR__).'/conexao/conexao.php');

    $ver = $con->query("select email from fornecedores");
    $linha = $ver->fetch_object();
    $email_certo =  $linha->email;

    if ($email_certo == $email){
        $dados = $con->query("select * from fornecedores where email = '$email'");
        if($linha2 = $dados->fetch_object()){
           $id = $linha2->id;
        }

        //header("Location: ../login_fornecedor/nova_senha.php");

    }else{
        echo "Erro";
    }

    $con->close();
?>