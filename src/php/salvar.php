<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$data = $_POST["datanascimento"];
$senha = $_POST["senha"];


$con = new mysqli("localhost", "root", "", "loja");

$con->query("insert into usuarios(nome,email,data_nascimento,senha) values ('$nome','$email','$data','$senha')");

$con->close();

 ?>

<link rel="stylesheet" href="../css/mensagem.css">
<div class="layout"></div>
<div class="topbar">    
        <a href="../index.html" ><img src="../imagens/logo.png" class="logo"></a>
</div>

<div class="Meio">
    <div class="msg">
        <div class="choice">
            <h1>Usuário Registrado</h1>
            <a href="../php/listagem.php">Conferir</a>
        </div>f
    </div>
</div>

