<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $senha = md5($_POST["senha"]);

    include(dirname(__DIR__).'/conexao.php');

    $con->query("insert into usuarios(nome,email,data_nascimento,senha) values ('$nome','$email','$data','$senha')");

    $con->close();

 ?>

<link rel="stylesheet" href="../../css/mensagem.css">
<div class="topbar">    
        <a href="../../index.html" ><img src="../../imagens/logo.png" class="logo"></a>
</div>

<div class="Meio">
    <div class="msg">
        <div class="choice">
            <h1>Usuário Registrado</h1>
            <a href="../../php/usuario/listagem.php">Conferir</a>
        </div>
    </div>
</div>

