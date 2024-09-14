<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $senha = $_POST["senha"];

    $con = new mysqli("localhost", "root", "", "loja");

    $con->query("update loja.usuarios set nome = '$nome', email = '$email', data_nascimento = '$data', senha = '$senha' where id = $id");

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
            <h1>Usuário Alterado</h1>
            <a href="../php/listagem.php">Voltar</a>
        </div>
    </div>
</div>