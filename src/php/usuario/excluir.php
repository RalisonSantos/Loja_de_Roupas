<?php
    $id =  $_GET["id"];

    include(dirname(__DIR__).'/conexao/conexao.php');

    $con->query("delete from usuarios where id =  $id");

    $con->close();

?>

<link rel="stylesheet" href="../../css/mensagem.css">
<div class="topbar">    
        <a href="../../index.html" ><img src="../../imagens/logo.png" class="logo"></a>
</div>

<div class="Meio">
    <div class="msg">
        <div class="choice">
            <h1>Usuário Excluido</h1>
            <a href="../../php/usuario/listagem.php">Voltar</a>
        </div>
    </div>
</div>