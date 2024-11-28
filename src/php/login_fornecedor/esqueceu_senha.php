<?php
    $email = $_POST["email"];

    include(dirname(__DIR__).'/conexao/conexao.php');

    $ver = $con->query("select email from fornecedores");
    $linha = $ver->fetch_object();
    $email_certo =  $linha->email;

    if($email == $email_certo)

    $con->close();
?>