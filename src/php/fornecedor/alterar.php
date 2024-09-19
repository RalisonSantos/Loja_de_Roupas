<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    include('C:\xampp\htdocs\Loja_de_Roupas\src\php\conexao.php');

    $con->query("update loja.fornecedores set nome = '$nome', email = '$email', senha = '$senha' where id = $id");

    $con->close();
?>

<link rel="stylesheet" href="../../css/mensagem.css">
<div class="topbar">    
        <a href="../../index.html" ><img src="../../imagens/logo.png" class="logo"></a>
</div>

<div class="Meio">
    <div class="msg">
        <div class="choice">
            <h1>Usuário Alterado</h1>
            <a href="../../php/fornecedor/listagem.php">Voltar</a>
        </div>
    </div>
</div>