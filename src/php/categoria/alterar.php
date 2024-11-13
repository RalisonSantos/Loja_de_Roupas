<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];

    include(dirname(__DIR__).'/conexao.php');
    
    $con->query("update categorias set nome = '$nome' where id = $id");

    $con->close();
?>

<link rel="stylesheet" href="../../css/mensagem.css">
<div class="topbar">    
        <a href="../../index.html" ><img src="../../imagens/logo.png" class="logo"></a>
</div>

<div class="Meio">
    <div class="msg">
        <div class="choice">
            <h1>Categoria Alterada</h1>
            <a href="../../php/categoria/listagem.php">Conferir</a>
        </div>
    </div>
</div>